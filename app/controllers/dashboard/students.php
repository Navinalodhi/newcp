<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

if(!isset($_SESSION['aves_uid'])){
    redirectRoute('dashboard/login');
}
if(!empty($_FILES['userfile']['name']))
      {
	          if (!is_dir('upload/studentimage/')) 
	          {
    			mkdir('upload/studentimage/', 0777, TRUE);

       		}
			$filename=$_FILES['userfile']['name'];
			if (!empty($_FILES['userfile']['name']))
			{
					$ext = pathinfo($filename, PATHINFO_EXTENSION);
			        $basepath ="upload/studentimage/" ;
					$randomnumber = rand(123456,654321);
					$newfilename = $randomnumber . "." . $ext ;        
					$target_path = $basepath . $newfilename ; 
					  
					             
		   if (move_uploaded_file($_FILES['userfile']['tmp_name'],$target_path))
			{
			}
	      }
	  }
	  else
	  {
	      $newfilename="8547.jpg";
	  }
if(isset($_POST['addStudent'])){
    
    $name = $_POST['name'];
    $class = $_POST['class'];
    $id=$_SESSION['aves_uid'];
	 $result=$db->query("SELECT * FROM teacher_db WHERE teacher_id = ".$id);
	 $teacher=$result->fetchAll();
	 foreach($teacher as $teachers)
	 {
	     $schoolname=$teachers['teacher_school'];
	 }
    $username = strtolower(str_replace(' ','',$_POST['name'].rand(1000,9999)));
    $password = time().rand(0,99);
    
    
    
    
    $q = $db->prepare("INSERT INTO student_db (student_name,student_image,student_username,student_password,student_teacherid,student_class,student_school,student_status) VALUES (?,?,?,?,?,?,?)");
    $q->execute(array($name,$newfilename,$username,$password,$_SESSION['aves_uid'],$schoolname,$class,1));
    
    
    redirectRoute('dashboard/students',array('success' => 1,'msg' => 'Student added succesfully'));
}

$q = $db->query("SELECT * FROM student_db WHERE student_teacherid = ".$db->quote($_SESSION['aves_uid']));
$students = $q->fetchAll();

