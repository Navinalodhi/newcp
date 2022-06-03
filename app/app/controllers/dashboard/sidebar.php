<?php
if(!isset($_SESSION['aves_uid'])){
    redirectRoute('dashboard/login');
}
$type = $_SESSION['aves_type'];

if($type === "teacher"){
  
   
    
    $q = $db->query("SELECT teacher_name FROM teacher_db WHERE teacher_id = ".$db->quote($_SESSION['aves_uid']));
    $name = $q->fetchColumn();
    $q = $db->query("SELECT teacher_image FROM teacher_db WHERE teacher_id = ".$db->quote($_SESSION['aves_uid']));
    $image = $q->fetchColumn();
    
}else{
     //Fetch the student posts
   
    
    $q = $db->query("SELECT student_name FROM student_db WHERE student_id = ".$db->quote($_SESSION['aves_uid']));
    $name = $q->fetchColumn();
     $q = $db->query("SELECT student_image FROM student_db WHERE student_id = ".$db->quote($_SESSION['aves_uid']));
    $image = $q->fetchColumn();
}
if(isset($_POST['addProfilepic'])){
  $update=0;
 if(!empty($_FILES['userfile']['name']))
   {
   	$filename=$_FILES['userfile']['name'];
			if (!empty($_FILES['userfile']['name']))
			{
					$ext = pathinfo($filename, PATHINFO_EXTENSION);
					$link=$_SERVER['DOCUMENT_ROOT']."/app//public/assets/";
			        $basepath =$link."images/";
					$randomnumber = rand(123456,654321);
					$newfilename = $randomnumber . "." . $ext ;        
					$target_path = $basepath . $newfilename ;      
		   if (move_uploaded_file($_FILES['userfile']['tmp_name'],$target_path))
			{
			}
	      }
        if($type=="student")
        {
          $q = $db->prepare("UPDATE student_db SET student_image = ? WHERE student_id = ?");
          $q->execute(array($newfilename,$_SESSION['aves_uid']));
          $update=1;
        }
        else if($type=="teacher")
        {
          $q = $db->prepare("UPDATE teacher_db SET teacher_image = ? WHERE teacher_id = ?");
          $q->execute(array($newfilename,$_SESSION['aves_uid']));
          $update=1;

        }
	      
	//redirectRoute('dashboard/myclass',array('msg' => 'Student Profile Pic has been updated'));
      }
      if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmpassword']))
      {

      	$username=$_POST['username'];
      	$password=$_POST['password'];
      	$confirmpassword=$_POST['confirmpassword'];
        if($username!="" && $password!="")
        {
          	if($type=="student")
            {
                $q = $db->query("SELECT COUNT(*) AS count FROM student_db WHERE student_username = ".$db->quote($username));
            }
            else if($type=="teacher")
            {
              $q = $db->query("SELECT COUNT(*) AS count FROM teacher_db WHERE teacher_username = ".$db->quote($username));
            }
        	 $count = $q->fetchColumn();
           if($count>0)
           {
              if($type=="student")
              {
                redirectRoute('dashboard/myclass',array('error' => 1,'msg' => 'Username Already exist'));
              }
              else if($type=="teacher")
              {
                redirectRoute('dashboard/index',array('error' => 1,'msg' => 'Username Already exist'));
              }
           }
           else
           {
              if($password!=$confirmpassword)
              {
                if($type=="student")
                {
                  redirectRoute('dashboard/myclass',array('error' => 1,'msg' => 'Invalid Confirm Password'));
                }
                else if($type=="teacher")
                {
                  redirectRoute('dashboard/index',array('error' => 1,'msg' => 'Invalid Confirm Password'));
                }

              }
              else
              {
                if($type=="student")
                {
                  $q = $db->prepare("UPDATE student_db SET student_username = ?,student_password = ? WHERE student_id = ?");
                  $q->execute(array($username,$password,$_SESSION['aves_uid']));
                  redirectRoute('dashboard/myclass',array('success' => 1,'msg' => 'Settings Updated'));
                }
                else if($type=="teacher")
                {
                  $q = $db->prepare("UPDATE teacher_db SET teacher_username = ?,teacher_password = ? WHERE teacher_id = ?");
                  $q->execute(array($username,$password,$_SESSION['aves_uid']));
                  redirectRoute('dashboard/index',array('success' => 1,'msg' => 'Settings Updated'));
                }
              }


           }
         }
         else
         {
          if($type=="student" && $update==0)
          {
            redirectRoute('dashboard/myclass',array('error' => 1,'msg' => 'Setting Fields Missing'));
          }
          else if($type=="teacher"  && $update==0)
          {
            redirectRoute('dashboard/index',array('error' => 1,'msg' => 'Setting Fields Missing'));
          }
          else if($type=="teacher"  && $update==1)
          {
            redirectRoute('dashboard/index',array('success' => 1,'msg' => 'Profile Picture Updated'));
          }
          else if($type=="student"  && $update==1)
          {
            redirectRoute('dashboard/index',array('success' => 1,'msg' => 'Profile Picture Updated'));
          }

          

         }



      }
}