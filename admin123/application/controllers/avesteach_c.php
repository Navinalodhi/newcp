<?php
Class avesteach_c extends CI_Controller
{
	public function __construct()
       {
            parent::__construct();
            $this->load->model('avesteach_m');
            $this->load->library('session');
			$this->load->helper('url');
			$this->load->helper('security');
            $this->clear_cache();

            if($this->router->fetch_method() != 'login'){
            $array_items = $this->session->userdata('value');
            $d=count($array_items);
			if($d==5)
			{
			$this->router->fetch_class();
			$this->router->fetch_method();
			}
			else
			{
			redirect('avesteach_c/login');
			}

			}
            
            
       }
       
	public function index()
	{ 
	  	$data['i']=0;
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('value')=="")
		{	
			$this->load->view('teachview/login',$data);
		}
		if($this->session->userdata('value')!="")
		
		{
			$data['array_items'] = $this->session->userdata('value');
	  
		  $this->load->view('teachview/adhead',$data);
	       $this->load->view('teachview/sidebar');
			$this->load->view('teachview/index');
			$this->load->view('teachview/adfoot');
		}
		
	}
	function clear_cache()
    {
		   $this->output->set_header("Cache-control:no-store,no-cache,must-revalidate,no-transform,max-age=0,post-check=0,pre-check=0");
		   $this->output->set_header("Pragma:no-cache");
	}
	  
     function login()
      {

            $array_items = $this->session->userdata('value');
            $d=count($array_items);
			if($d==5)
			{
				redirect('avesteach_c/index');
			}
		    $this->load->library('form_validation');
           	$this->form_validation->set_rules('password', 'Password ', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            if ($this->form_validation->run() == FALSE)
		   
			{
				$data['i']=0;
				$this->load->view('teachview/login',$data);
			}
			else
			{
				$this->select();
				
			}
		   
	   }
        
	
	
    function select()
	{
		
		 $username=$this->input->post('username');
		 $password=$this->input->post('password');
		 $num=$this->avesteach_m->select('teacher_db',$username,$password);
		$data['i']=1;
				if($num==0)
				{

					$this->load->view('teachview/login',$data);
				}
		  		else
					{   
						$result=$this->avesteach_m->selectid('teacher_db',$username,$password);
						foreach($result as $results)
						{
							$id=$results->teacher_id;
							$class=$results->teacher_class;
							$school=$results->teacher_school;
						}
						$newdata = array('username'  => $username,'password' => $password ,'id'=>$id,'class'=>$class,'school'=>$school);           
		                $this->session->set_userdata('value',$newdata);
						if($this->session->userdata('value'))
			     		{
		           			$data['array_items'] = $this->session->userdata('value');
			  				$this->load->view('teachview/adhead',$data);
		       				$this->load->view('teachview/sidebar');
							$this->load->view('teachview/index');
							$this->load->view('teachview/adfoot');
			 
				
			    		}

					}
	
	
	}
	 function logout()
	{
	 
		$this->session->sess_destroy();
		$data['i']=0;
		$this->load->view('teachview/login',$data);
		
	}
	function password()
  {
	  $data['i']=0;
	  $data['array_items'] = $this->session->userdata('value'); 
       $this->load->view('teachview/adhead',$data);
      $this->load->view('teachview/sidebar');
      $this->load->view('teachview/password',$data);
      $this->load->view('teachview/adfoot');
  }
   function passwordchk() 
  {  
		$data['i']=0;
		$this->form_validation->set_rules('password', 'Old Password ', 'required');
		$this->form_validation->set_rules('newpassword', 'New Password ', 'required|matches[confirmpassword]');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password ', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['i']=0;
			$data['array_items'] = $this->session->userdata('value');
			$this->load->view('teachview/adhead',$data);
      		$this->load->view('teachview/sidebar');
      		$this->load->view('teachview/password',$data);
      		$this->load->view('teachview/adfoot');
		}
		else
		{
			$password=$this->input->post('password');
		 	$npassword=$this->input->post('newpassword');
		 	$cpassword=$this->input->post('confirmpassword');
		 	$salt="+wehatepasswords";
		 	$str=$password.$salt;
		 	$password = do_hash($str);
			$var=$this->avesteach_m->selectn('teacher_db',$password);
			if($var==0)
			{
				$data['i']=1;
	   			$data['array_items'] = $this->session->userdata('value');
				$this->load->view('teachview/adhead',$data);
      			$this->load->view('teachview/sidebar');
      			$this->load->view('teachview/password',$data);
      			$this->load->view('teachview/adfoot');

			}
			else
			{
				if($npassword==$cpassword)
				{
					$salt="+wehatepasswords";
		 			$str=$npassword.$salt;
		 			$npassword = do_hash($str);
					$data=array('teacher_password'=>$npassword);
					$this->avesteach_m->selectu($data);
					$data['i']=2;
     				$data['array_items'] = $this->session->userdata('value');
					$this->load->view('teachview/adhead',$data);
     			    $this->load->view('teachview/sidebar');
      				$this->load->view('teachview/password',$data);
      				$this->load->view('teachview/adfoot');
  				}
  				else
  				{
			  	  $data['i']=3;
				  $data['array_items'] = $this->session->userdata('value');
				  $this->load->view('teachview/adhead',$data);
			      $this->load->view('teachview/sidebar');
			      $this->load->view('teachview/password',$data);
			      $this->load->view('teachview/adfoot');
  				}
	
			}
     
  		}
  	}
  	function dashboard1()
	{   
	
      $data['array_items'] = $this->session->userdata('value');
	  $this->load->view('teachview/adhead',$data);
       $this->load->view('teachview/sidebar');
		$this->load->view('teachview/index');
		$this->load->view('teachview/adfoot');
	
		
	}
	function student()
	{
		$val=$this->session->userdata('value');
		$techerid=$val['id'];
		$data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesteach_m->getstudentcontent('student_db',$techerid);
	  $this->load->view('teachview/adhead',$data);
       $this->load->view('teachview/sidebar');
		$this->load->view('teachview/student');
		$this->load->view('teachview/adfoot');
	}
	function studentinsert()
	{
		$name=$this->input->post('studentname');
		

		if($name!="")
		{
			$address=$this->input->post('studentaddress');
			$phone=$this->input->post('studentphone');
			$email=$this->input->post('studentemail');
			$dob=$this->input->post('studentdob');
			$year=$this->input->post('studentadmyear');
			$val=$this->session->userdata('value');
			
				$teacherid=$val['id'];
				$teacherclass=$val['class'];
				$teacherschool=$val['school'];

			$newfilename="avata.jpg";
			if(!empty($_FILES['userfile']['name']))
  			{
			  	if (!is_dir('upload/studentimage/')) {
			    mkdir('./upload/studentimage/', 0777, TRUE);

			}
			$filename=$_FILES['userfile']['name'];
			if (!empty($_FILES['userfile']['name']))
        	{
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				
						$this->load->helper("url");	
				        $basepath ="./upload/studentimage/" ;
						$randomnumber = rand(123456,654321);
						$newfilename = $randomnumber . "." . $ext ;        
						$target_path = $basepath . $newfilename ; 
						             
			if (move_uploaded_file($_FILES['userfile']['tmp_name'],$target_path))
			{
				

			}
		}
	}

			$temp=rand(1478,985554799);
         	$username =$name.$temp; 
         	$password=rand(123456,987654999);
			$data=array('student_name' => $name,'student_class' => $teacherclass,'student_school' => $teacherschool,'student_username' => $username,
			'student_password'=>$password,'student_address' => $address,'student_phone' => $phone,'student_email' => $email,'student_admissionyear' => $year,'student_dob' => $dob,'student_image'=>$newfilename,'student_teacherid'=>$teacherid);
	    	$this->avesteach_m->studentinsert('student_db',$data);
	    	$data['array_items'] = $this->session->userdata('value');
	    	$data['post']=$this->avesteach_m->getcontent('student_db');
	  		$this->load->view('teachview/adhead',$data);
       		$this->load->view('teachview/sidebar');
			$this->load->view('teachview/student');
			$this->load->view('teachview/adfoot');
	    }
	    else{

	    	$data['array_items'] = $this->session->userdata('value');
	    	$data['post']=$this->avesteach_m->getcontent('student_db');
	  		$this->load->view('teachview/adhead',$data);
       		$this->load->view('teachview/sidebar');
			$this->load->view('teachview/student');
			$this->load->view('teachview/adfoot');
			
	    }
	}
	function studentactive()
{
	$studentid = $this->uri->segment(3);
		 $salt="+deleteidstudent";
    	  $str=$studentid.$salt;
          $studentdeleteid = do_hash($str);
          $hashstudentid=$this->uri->segment(4);
	if($studentdeleteid==$hashstudentid)
	{
		$status=0;
		
		$data=array('student_status'=>$status);
		
			$this->avesteach_m->studentupdate($studentid,$data);
			$this->student();
		
		
	}
	else
	{
		$this->student();
	}
}
function studentdeactive()
{
	$studentid = $this->uri->segment(3);
		 $salt="+deleteidstudent";
    	  $str=$studentid.$salt;
          $studentdeleteid = do_hash($str);
          $hashstudentid=$this->uri->segment(4);
	if($studentdeleteid==$hashstudentid)
	{
		$status=1;
		$table='student_db';
		$data=array('student_status'=>$status);
			$this->avesteach_m->studentupdate($studentid,$data);
			$this->student();

	}
	else
	{
		$this->student();
	}
}
function studentedit()
{
		$this->session->set_flashdata('success_msg', 'success');
		$studentid = $this->uri->segment(3);
		$data['post'] = $this->avesteach_m->showcontent('student_db',$studentid);
		$data['array_items'] = $this->session->userdata('value');
		$data['i']=0;
		$this->load->view('teachview/adhead',$data);
		$this->load->view('teachview/sidebar');
		$this->load->view('teachview/studentedit',$data);
		$this->load->view('teachview/adfoot');
		if($studentid=="")
		{
			$this->student();
		}
}
function tback()
{
	 
	  $data['i']=0;
	  $data['array_items'] = $this->session->userdata('value');
	  $data['post']=$this->avesteach_m->getcontent('student_db');
	  $this->load->view('teachview/adhead',$data);
      $this->load->view('teachview/sidebar');
      $this->load->view('teachview/student');
      $this->load->view('teachview/adfoot');
}
function studentupdate()
{
	$studentid=$this->input->post('studentid');
	 if($studentid!="")
	  {
	  	$name=$this->input->post('studentname');
		$class=$this->input->post('studentclass');
		$school=$this->input->post('studentschool');
		$dob=$this->input->post('studentdob');
		$year=$this->input->post('studentadmyear');
		$address=$this->input->post('studentaddress');
		$phone=$this->input->post('studentphone');
		$email=$this->input->post('studentemail');
		$data=array('student_name' => $name,'student_class' => $class,'student_school' => $school,'student_address' => $address,
			'student_phone' => $phone,'student_email' => $email,'student_admissionyear' => $year,'student_dob' => $dob);
	    	$this->avesteach_m->studentupdate($studentid,$data);

	    if (!empty($_FILES['userfile']['name']))
        {
			$filename=$_FILES['userfile']['name']; 
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$this->load->helper("url");
			$basepath ="./upload/studentimage/" ;
			$randomnumber = rand(123456,654321);
			$newfilename = $randomnumber . "." . $ext ;        
			$target_path = $basepath . $newfilename ;  
			if (move_uploaded_file($_FILES['userfile']['tmp_name'],$target_path))
			{
			}

			$data=array('student_image'=>$newfilename);
			$this->avesteach_m->studentupdate($studentid,$data);
	

		}

	  	 $data['i']=1;
	  	 $data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesteach_m->showcontent('student_db',$studentid);
	    $this->load->view('teachview/adhead',$data);
        $this->load->view('teachview/sidebar');
        $this->load->view('teachview/studentedit',$data);
        $this->load->view('teachview/adfoot');
	  }
	  else
	  {
	  	$data['i']=0;
		$data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesteach_m->showcontent('student_db',$studentid);
	    $this->load->view('teachview/adhead',$data);
        $this->load->view('teachview/sidebar');
        $this->load->view('teachview/studentedit',$data);
        $this->load->view('teachview/adfoot');
	  }
	  
}
function studentdelete()
{
		$studentid = $this->uri->segment(3);
		 $salt="+deleteidstudent";
         $str=$studentid.$salt;
         $studentdeleteid = do_hash($str);
		 $hashstudentid=$this->uri->segment(4);
		 if($studentdeleteid==$hashstudentid)
		 {
		 	$data=$this->avesteach_m->deletestudent($studentid);
			foreach($data as $datas)
		 	{
			
		 		$newfilename=$datas->student_image; 
				$this->load->helper("url");	
				$filename="./upload/studentimage/".$newfilename;
				unlink($filename);
			}
	  		$this->avesteach_m->studentdelete($studentid);
	  		$data['i'] = 1;
	  		$data['post']=$this->avesteach_m->getcontent('student_db');
     		$data['array_items'] = $this->session->userdata('value');
       		$this->load->view('teachview/adhead',$data);
     	    $this->load->view('teachview/sidebar');
      		$this->load->view('teachview/student',$data);
      		$this->load->view('teachview/adfoot');
      	}
      	else
      	{

      		$data['i'] = 0;
	  		$data['post']=$this->dhathri_m->getcontent('student_db');
     		$data['array_items'] = $this->session->userdata('value');
       		$this->load->view('teachview/adhead',$data);
     	    $this->load->view('teachview/sidebar');
      		$this->load->view('teachview/imagepage',$data);
      		$this->load->view('teachview/adfoot');
      	}
      	if($studentid=="")
      	{
		 	$this->student();
	  	}
}
function article()
	{
		$val=$this->session->userdata('value');
		$teacherid=$val['class'];
		$data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesteach_m->getarticlecontent('article_db',$teacherid);
	  $this->load->view('teachview/adhead',$data);
       $this->load->view('teachview/sidebar');
		$this->load->view('teachview/article');
		$this->load->view('teachview/adfoot');
	}
}
?>