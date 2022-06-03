<?php
Class avesadmin_c extends CI_Controller
{
	public function __construct()
       {
            parent::__construct();
            $this->load->model('avesadmin_m');
            $this->load->library('session');
			$this->load->helper('url');
			$this->load->helper('security');
            $this->clear_cache();

            if($this->router->fetch_method() != 'login'){
            $array_items = $this->session->userdata('value');
            $d=count($array_items);
			if($d==2)
			{
			$this->router->fetch_class();
			$this->router->fetch_method();
			}
			else
			{
			redirect('avesadmin_c/login');
			}

			}
            
            
       }
       
	public function index()
	{ 
	  	$data['i']=0;
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('value')=="")
		{	
			$this->load->view('view/login',$data);
		}
		if($this->session->userdata('value')!="")
		
		{
			$data['array_items'] = $this->session->userdata('value');
	  
		  $this->load->view('view/adhead',$data);
	       $this->load->view('view/sidebar');
			$this->load->view('view/index');
			$this->load->view('view/adfoot');
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
			if($d==2)
			{
				redirect('avesadmin_c/index');
			}
		    $this->load->library('form_validation');
           	$this->form_validation->set_rules('password', 'Password ', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            if ($this->form_validation->run() == FALSE)
		   
			{
				$data['i']=0;
				$this->load->view('view/login',$data);
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
		 $salt="+wehatepasswords";
		 $str=$password.$salt;
		 $password = do_hash($str);
		 $num=$this->avesadmin_m->select('admin_db',$username,$password);
		$data['i']=1;
				if($num==0)
				{

					$this->load->view('view/login',$data);
				}
		  		else
					{   
						$newdata = array('username'  => $username,'password' => $password );           
		                $this->session->set_userdata('value',$newdata);
						if($this->session->userdata('value'))
			     		{
		           			$data['array_items'] = $this->session->userdata('value');
			  				$this->load->view('view/adhead',$data);
		       				$this->load->view('view/sidebar');
							$this->load->view('view/index');
							$this->load->view('view/adfoot');
			 
				
			    		}

					}
	
	
	}
	 function logout()
	{
	 
		$this->session->sess_destroy();
		$data['i']=0;
		$this->load->view('view/login',$data);
		
	}
	function password()
  {
	  $data['i']=0;
	  $data['array_items'] = $this->session->userdata('value'); 
       $this->load->view('view/adhead',$data);
      $this->load->view('view/sidebar');
      $this->load->view('view/password',$data);
      $this->load->view('view/adfoot');
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
			$this->load->view('view/adhead',$data);
      		$this->load->view('view/sidebar');
      		$this->load->view('view/password',$data);
      		$this->load->view('view/adfoot');
		}
		else
		{
			$password=$this->input->post('password');
		 	$npassword=$this->input->post('newpassword');
		 	$cpassword=$this->input->post('confirmpassword');
		 	$salt="+wehatepasswords";
		 	$str=$password.$salt;
		 	$password = do_hash($str);
			$var=$this->avesadmin_m->selectn('admin_db',$password);
			if($var==0)
			{
				$data['i']=1;
	   			$data['array_items'] = $this->session->userdata('value');
				$this->load->view('view/adhead',$data);
      			$this->load->view('view/sidebar');
      			$this->load->view('view/password',$data);
      			$this->load->view('view/adfoot');

			}
			else
			{
				if($npassword==$cpassword)
				{
					$salt="+wehatepasswords";
		 			$str=$npassword.$salt;
		 			$npassword = do_hash($str);
					$data=array('password'=>$npassword);
					$this->avesadmin_m->selectu($data);
					$data['i']=2;
     				$data['array_items'] = $this->session->userdata('value');
					$this->load->view('view/adhead',$data);
     			    $this->load->view('view/sidebar');
      				$this->load->view('view/password',$data);
      				$this->load->view('view/adfoot');
  				}
  				else
  				{
			  	  $data['i']=3;
				  $data['array_items'] = $this->session->userdata('value');
				  $this->load->view('view/adhead',$data);
			      $this->load->view('view/sidebar');
			      $this->load->view('view/password',$data);
			      $this->load->view('view/adfoot');
  				}
	
			}
     
  		}
  	}
  	function dashboard1()
	{   
	
      $data['array_items'] = $this->session->userdata('value');
	  $this->load->view('view/adhead',$data);
       $this->load->view('view/sidebar');
		$this->load->view('view/index');
		$this->load->view('view/adfoot');
	
		
	}
	function teacher()
	{
		$data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesadmin_m->getcontent('teacher_db');
	  $this->load->view('view/adhead',$data);
       $this->load->view('view/sidebar');
		$this->load->view('view/teacher');
		$this->load->view('view/adfoot');
	}
	function teacherinsert()
	{
		$name=$this->input->post('teachername');
		$class=$this->input->post('teacherclass');
		$school=$this->input->post('teacherschool');
		if($name!="")
		{
			$temp=rand(1478,9855547);
         	$username =$name.$temp; 
         	$password=rand(123456,987654);
			$data=array('teacher_name' => $name,'teacher_class' => $class,'teacher_school' => $school,'teacher_username' => $username,
			'teacher_password'=>$password);
	    	$this->avesadmin_m->teacherinsert('teacher_db',$data);
	    	$data['array_items'] = $this->session->userdata('value');
	    	$data['post']=$this->avesadmin_m->getcontent('teacher_db');
	  		$this->load->view('view/adhead',$data);
       		$this->load->view('view/sidebar');
			$this->load->view('view/teacher');
			$this->load->view('view/adfoot');
	    }
	    else{

	    	$data['array_items'] = $this->session->userdata('value');
	    	$data['post']=$this->avesadmin_m->getcontent('teacher_db');
	  		$this->load->view('view/adhead',$data);
       		$this->load->view('view/sidebar');
			$this->load->view('view/teacher');
			$this->load->view('view/adfoot');
			
	    }
	}
	function teacheractive()
{
	$teacherid = $this->uri->segment(3);
		 $salt="+deleteidteacher";
    	  $str=$teacherid.$salt;
          $teacherdeleteid = do_hash($str);
          $hashteacherid=$this->uri->segment(4);
	if($teacherdeleteid==$hashteacherid)
	{
		$status=0;
		
		$data=array('teacher_status'=>$status);
		
			$this->avesadmin_m->teacherupdate($teacherid,$data);
			$this->teacher();
		
		
	}
	else
	{
		$this->teacher();
	}
}
function teacherdeactive()
{
	$teacherid = $this->uri->segment(3);
		 $salt="+deleteidteacher";
    	  $str=$teacherid.$salt;
          $teacherdeleteid = do_hash($str);
          $hashteacherid=$this->uri->segment(4);
	if($teacherdeleteid==$hashteacherid)
	{
		$status=1;
		$table='teacher_db';
		$data=array('teacher_status'=>$status);
			$this->avesadmin_m->teacherupdate($teacherid,$data);
			$this->teacher();

	}
	else
	{
		$this->teacher();
	}
}
function teacheredit()
{
		$this->session->set_flashdata('success_msg', 'success');
		$teacherid = $this->uri->segment(3);
		$data['post'] = $this->avesadmin_m->showcontent('teacher_db',$teacherid);
		$data['array_items'] = $this->session->userdata('value');
		$data['i']=0;
		$this->load->view('view/adhead',$data);
		$this->load->view('view/sidebar');
		$this->load->view('view/teacheredit',$data);
		$this->load->view('view/adfoot');
		if($teacherid=="")
		{
			$this->teacher();
		}
}
function tback()
{
	 
	  $data['i']=0;
	  $data['array_items'] = $this->session->userdata('value');
	  $data['post']=$this->avesadmin_m->getcontent('teacher_db');
	  $this->load->view('view/adhead',$data);
      $this->load->view('view/sidebar');
      $this->load->view('view/teacher');
      $this->load->view('view/adfoot');
}
function teacherupdate()
{
	$teacherid=$this->input->post('teacherid');
	 if($teacherid!="")
	  {
	  	$name=$this->input->post('teachername');
		$class=$this->input->post('teacherclass');
		$school=$this->input->post('teacherschool');
		$data=array('teacher_name' => $name,'teacher_class' => $class,'teacher_school' => $school);
	    	$this->avesadmin_m->teacherupdate($teacherid,$data);
	    	$post=$this->avesadmin_m->showcontent('teacher_db',$teacherid);
	    	foreach($post as $posts)
	    	{
	    		$class=$posts->teacher_class;
	    		$data=array('student_class' =>$class,'student_school' =>$school);
	    		$this->avesadmin_m->studentupdate($teacherid,$data);
	    	}
	  	 $data['i']=1;
	  	 $data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesadmin_m->getcontent('teacher_db');
	    $this->load->view('view/adhead',$data);
        $this->load->view('view/sidebar');
        $this->load->view('view/teacher');
        $this->load->view('view/adfoot');
	  }
	  else
	  {
	  	$data['i']=0;
		$data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesadmin_m->getcontent('teacher_db');
	    $this->load->view('view/adhead',$data);
        $this->load->view('view/sidebar');
        $this->load->view('view/teacher');
        $this->load->view('view/adfoot');
	  }

	  
}
function student()
	{
		$data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesadmin_m->getcontent('student_db');
	  $this->load->view('view/adhead',$data);
       $this->load->view('view/sidebar');
		$this->load->view('view/student');
		$this->load->view('view/adfoot');
	}
	function category()
	{
		$data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesadmin_m->getcontent('category_db');
	  $this->load->view('view/adhead',$data);
       $this->load->view('view/sidebar');
		$this->load->view('view/category');
		$this->load->view('view/adfoot');
	}
	function categoryinsert()
	{
		$name=$this->input->post('categoryname');
		if($name!="")
		{
			$description=$this->input->post('categorydescription');
			$data=array('category_name' => $name,'category_description'=>$description);
	    	$this->avesadmin_m->categoryinsert('category_db',$data);
	    	$data['array_items'] = $this->session->userdata('value');
	    	$data['post']=$this->avesadmin_m->getcontent('category_db');
	  		$this->load->view('view/adhead',$data);
       		$this->load->view('view/sidebar');
			$this->load->view('view/category');
			$this->load->view('view/adfoot');
	    }
	    else{

	    	$data['array_items'] = $this->session->userdata('value');
	    	$data['post']=$this->avesadmin_m->getcontent('category_db');
	  		$this->load->view('view/adhead',$data);
       		$this->load->view('view/sidebar');
			$this->load->view('view/category');
			$this->load->view('view/adfoot');
			
	    }
	}
	function categoryactive()
	{
		$categoryid = $this->uri->segment(3);
			 $salt="+deleteidcategory";
	    	  $str=$categoryid.$salt;
	          $categorydeleteid = do_hash($str);
	          $hashcategoryid=$this->uri->segment(4);
		if($categorydeleteid==$hashcategoryid)
		{
			$status=0;
			
			$data=array('category_status'=>$status);
			
				$this->avesadmin_m->categoryupdate($categoryid,$data);
				$this->category();
			
			
		}
		else
		{
			$this->category();
		}
    }
function categorydeactive()
{
	$categoryid = $this->uri->segment(3);
		 $salt="+deleteidcategory";
    	  $str=$categoryid.$salt;
          $categorydeleteid = do_hash($str);
          $hashcategoryid=$this->uri->segment(4);
	if($categorydeleteid==$hashcategoryid)
	{
		$status=1;
		$table='category_db';
		$data=array('category_status'=>$status);
			$this->avesadmin_m->categoryupdate($categoryid,$data);
			$this->category();

	}
	else
	{
		$this->category();
	}
}
function categoryedit()
{
		$this->session->set_flashdata('success_msg', 'success');
		$categoryid = $this->uri->segment(3);
		$data['post'] = $this->avesadmin_m->showcontentcategory('category_db',$categoryid);
		$data['array_items'] = $this->session->userdata('value');
		$data['i']=0;
		$this->load->view('view/adhead',$data);
		$this->load->view('view/sidebar');
		$this->load->view('view/categoryedit',$data);
		$this->load->view('view/adfoot');
		if($categoryid=="")
		{
			$this->category();
		}
}
function cback()
{
	 
	  $data['i']=0;
	  $data['array_items'] = $this->session->userdata('value');
	  $data['post']=$this->avesadmin_m->getcontent('category_db');
	  $this->load->view('view/adhead',$data);
      $this->load->view('view/sidebar');
      $this->load->view('view/category');
      $this->load->view('view/adfoot');
}
function categoryupdate()
{
	$categoryid=$this->input->post('categoryid');
	 if($categoryid!="")
	  {
	  	$name=$this->input->post('categoryname');
		$description=$this->input->post('categorydescription');
		$data=array('category_name' => $name,'category_description' => $description);
	    	$this->avesadmin_m->categoryupdate($categoryid,$data);

	  	 $data['i']=1;
	  	 $data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesadmin_m->getcontent('category_db');
	    $this->load->view('view/adhead',$data);
        $this->load->view('view/sidebar');
        $this->load->view('view/category');
        $this->load->view('view/adfoot');
	  }
	  else
	  {
	  	$data['i']=0;
		$data['array_items'] = $this->session->userdata('value');
		$data['post']=$this->avesadmin_m->getcontent('category_db');
	    $this->load->view('view/adhead',$data);
        $this->load->view('view/sidebar');
        $this->load->view('view/category');
        $this->load->view('view/adfoot');
	  }

	  
}
}
?>