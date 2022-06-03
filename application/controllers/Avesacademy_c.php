<?php
Class Avesacademy_c extends CI_Controller
{
		public function __construct()
       	{
       		
            parent::__construct();
            $this->load->model('Avesacademy_m');
			$this->load->helper('url');
			$this->load->helper('form');
			
			
	
       	}
       	public function articlesubmission()
       	{
       		
       		
       		if(isset($_GET['uid']) && isset($_GET['_sign'])){
       			if(md5('key123'.$_GET['uid']) == $_GET['_sign']){
       				$this->load->view('views/articlesubmission');
       			}else{
       				header("Location: https://".$_SERVER['SERVER_NAME']."/app/dashboard/login");
       				die();
       			}
       		}else{
       			header("Location: https://".$_SERVER['SERVER_NAME']."/app/dashboard/login");
       			die();
       		}
       		
       	
       	}
       	
       	public function articlesubmissioninsert()
       	{
       	
       		
       		if(!empty($_POST['public']))
       		{
       		
       			$privacy=$_POST['public'];
       			if(!empty($_POST['artname']))
       			{
       				$name=$_POST['artname'];
       			}
       			else
       			{
       				$name=NULL;
       			}
       			if(!empty($_POST['arttags']))
       			{
       				$tag=$_POST['arttags'];
       				$temp=explode(",",$tag);
       				$result['tag']=$temp;
       				$tag=json_encode($result);
       			}
       			else
       			{
       				$tag=NULL;
       			}


       			if(!empty($_FILES['image-input']['name']))
	      		{
	      		
					if(!empty($_FILES['image-input']['name']))
			      	{
			      	
			      	 	if (!is_dir('upload/articleimage/')) 
						 {
					    	mkdir('./upload/articleimage/', 0777, TRUE);
						 }

						$filename=$_FILES['image-input']['name'];
						if (!empty($_FILES['image-input']['name']))
						{
								$ext = pathinfo($filename, PATHINFO_EXTENSION);
						
								$this->load->helper("url");	
						        $basepath ="./upload/articleimage/" ;
								$randomnumber = rand(123456,654321);
								$newfilename = $randomnumber . "." . $ext ;        
								$target_path = $basepath . $newfilename ; 		             
                                                                
							   if (move_uploaded_file($_FILES['image-input']['tmp_name'],$target_path))
								{
								}else{
									echo "Not uploaded because of error: ".$_FILES['file']['error'];
           								return;
								}
						}
					}
					$type="image";
					$data=array('article_name'=>$name,'article_file'=>$newfilename,'article_filetype'=>$type,'article_studentid'=>$_POST['uid'],
						'article_studentclass'=>"4",'article_tag'=>$tag,'article_visibility'=>$privacy);
					$id=$this->Avesacademy_m->articleinsert('article_db',$data);
					if(!empty($id))
					{
						$data['msg']="success";
					}
					else
					{
						$data['msg']="false";
					}
					
					header("Location: https://".$_SERVER['SERVER_NAME']."/app/dashboard/myuploads?msg=Article uploaded successfully. Waiting for approval from your Teacher&path=".$target_path);
					//$this->load->view('views/articlesubmission',$data);
				}
				if(!empty($_FILES['video-input']['name']))
	      		{
					if(!empty($_FILES['video-input']['name']))
			      	{
			      	 	if (!is_dir('upload/articlevideo/')) 
						 {
					    	mkdir('./upload/articlevideo/', 0777, TRUE);
						 }

						$filename=$_FILES['video-input']['name'];
						if (!empty($_FILES['video-input']['name']))
						{
								$ext = pathinfo($filename, PATHINFO_EXTENSION);
						
								$this->load->helper("url");	
						        $basepath ="./upload/articlevideo/" ;
								$randomnumber = rand(123456,654321);
								$newfilename = $randomnumber . "." . $ext ;        
								$target_path = $basepath . $newfilename ; 		             
							   if (move_uploaded_file($_FILES['video-input']['tmp_name'],$target_path))
								{
								}
						}
					}
					$type="video";
					$data=array('article_file'=>$newfilename,'article_filetype'=>$type,'article_studentid'=>$_POST['uid'],'article_studentclass'=>"4",
						'article_visibility'=>$privacy);
					$id=$this->Avesacademy_m->articleinsert('article_db',$data);
					if(!empty($id))
					{
						$data['msg']="success";
					}
					else
					{
						$data['msg']="false";
					}
					header("Location: https://".$_SERVER['SERVER_NAME']."/app/dashboard/myuploads");
					//$this->load->view('views/articlesubmission',$data);
				}
				if(!empty($_FILES['pdf-input']['name']))
	      		{
					if(!empty($_FILES['pdf-input']['name']))
			      	{
			      	 	if (!is_dir('upload/articlepdf/')) 
						 {
					    	mkdir('./upload/articlepdf/', 0777, TRUE);
						 }

						$filename=$_FILES['pdf-input']['name'];
						if (!empty($_FILES['pdf-input']['name']))
						{
								$ext = pathinfo($filename, PATHINFO_EXTENSION);
						
								$this->load->helper("url");	
						        $basepath ="./upload/articlepdf/" ;
								$randomnumber = rand(123456,654321);
								$newfilename = $randomnumber . "." . $ext ;        
								$target_path = $basepath . $newfilename ; 		             
							   if (move_uploaded_file($_FILES['pdf-input']['tmp_name'],$target_path))
								{
								}
						}
					}
					
					$type="pdf";
					$data=array('article_file'=>$newfilename,'article_filetype'=>$type,'article_studentid'=> $_POST['uid'],'article_studentclass'=>"4",
						'article_visibility'=>$privacy);
					$id=$this->Avesacademy_m->articleinsert('article_db',$data);
					if(!empty($id))
					{
						$data['msg']="success";
					}
					else
					{
						$data['msg']="false";
					}
					
					
					header("Location: https://".$_SERVER['SERVER_NAME']."/app/dashboard/myuploads");
					//$this->load->view('views/articlesubmission',$data);
				}


       		}
       	}
       	public function aves()
       	{
       		$data['post']=$this->Avesacademy_m->getarticlecontent('article_db');
       		$this->load->view('views/aves',$data);
       	}
       	
       	
       	public function artistprofile()
       	{

       		$id=$this->uri->segment(3);
       		if($id!=NULL)
       		{
       			$data['posts']=$this->Avesacademy_m->getArtistWorks($id);
       			$size=count($data['posts']);
       			if($size===0)
       			{
       				$this->load->view('errors/html/error_404'); 
       			}
       			else
       			{
       				$this->load->view('views/schoolprofile',$data);
       			}
       			
       		}
       		else
       		{  
       			$this->load->view('errors/html/error_404'); 
       		}
       	}
       	
       	public function login(){
       		$this->load->view('views/login');
       	}
       	
       	public function articles()
       	{
       		$pageno=$this->uri->segment(3);
       		if($pageno!=NULL)
       		{
	       		$page=$pageno;
	       		$row=NULL;
	       		if($row==NULL || $row==0)
					{ $row=16;}
				if($page==1 || $page==0){
					$row1=0;
				}
				else{
					$row1=($page-1)*$row;
				}
				
				$data['count']=$this->Avesacademy_m->getarticlecount('article_db');
	       		$data['post']=$this->Avesacademy_m->getarticlecontentpage('article_db',$row,$row1);
	       		$data['pageno']=$page;
	       		
	       		$this->load->view('views/articles',$data);
       		}
       		else
       		{
       			$this->load->view('errors/html/error_404');
       		}
       	}

       	public function articledetail()
       	{
       		$id=$this->uri->segment(3);
       		if($id!=NULL)
       		{
	       		$articleid=$id;
	       		$data['val']=$this->Avesacademy_m->getsinglearticlecontent('article_db',$articleid);
	       		if(!empty($data['val']))
	       		{
		       		$data['post']=$this->Avesacademy_m->getarticlecontent('article_db');
		       		$this->load->view('views/singlearticle',$data);
	       		}
	       		else
	       		{
	       			$this->aves();
	       		}
       		}
       		else
       		{
       			$this->load->view('errors/html/error_404');
       		}
       	}
       	
       	public function contactus()
       	{

       		$this->load->view('views/contactus');
       	}
         
          public function portfolio()
       	{
       		$id=$this->uri->segment(3);
       		if($id!=NULL)
       		{
	       		$studentid=$id;
	       		$data['post']=$this->Avesacademy_m->getallarticlestudent('article_db',$studentid);
	       		$data['val']=$this->Avesacademy_m->getstudentdetail('student_db',$studentid);
	       		$size=count($data['val']);
	       		if($size==1)
	       		{
	       		$this->load->view('views/portfolio',$data);
	       		}
	       		else
	       		{
	       			$this->load->view('errors/html/error_404');
	       		}
       		}
       		else
       		{
       			$this->load->view('errors/html/error_404'); 
       		}
       	}
       	
       
       	public function articlesearch($pageno){

       		$page=$pageno;
       		$row=NULL;
       		if($row==NULL || $row==0)
				{ $row=16;}
			if($page==1 || $page==0){
				$row1=0;
			}
			else{
				$row1=($page-1)*$row;
			}
			
		$data['count']=$this->Avesacademy_m->getarticlecount('article_db');
       		$data['post']=$this->Avesacademy_m->getarticlecontentpage('article_db',$row,$row1);
       		$data['pageno']=$page;
       		$this->load->view('views/article-search',$data);
       	}
       	public function searchajax()
       	{
       		$data['post']=NULL;
       		$filter=$_GET["filter"];
       		$search=$_GET["search"];

       		if($filter==="articletag")
       		{
       			$data['post']=$this->Avesacademy_m->getarticleajaxtag('article_db',$search);
       		}
       		elseif ($filter==="student") {
       			
       			$data['post']=$this->Avesacademy_m->getarticleajaxstudent('article_db',$search);

       		}
       		elseif ($filter==="article") {
       			
       			$data['post']=$this->Avesacademy_m->getarticleajaxarticle('article_db',$search);
       		}
       		elseif ($filter==="teacher") {
       			
       			$data['post']=$this->Avesacademy_m->getarticleajaxteacher('article_db',$search);
       		}
       		$this->load->view('views/articleajaxsearch',$data);
       	}

        
}
