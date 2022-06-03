<?php

date_default_timezone_set('Asia/Kolkata');

  if(@$_GET['all']){
  	    if(@$_GET['all'] == 11){
                $conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');		
                
		$sql = "SELECT * FROM avesacad_avesacademy.article_db ORDER BY article_insertdate DESC";	
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		
		echo '{"articles":[';
		$i = 0;
		while($row=mysqli_fetch_array($result)){
			
			$ida= $row['article_id'];
			$filea= $row['article_file'];
			$filetypea = $row['article_filetype'];
			$studentida = $row['article_studentid'];
                        $likea = $row['article_like']; 
                        $studentclassa = $row['article_studentclass']; 
                        $articledate = $row['article_insertdate'];
                                                
                        $articledate = getArticleDate($articledate);
			                        
                        $sql = "SELECT * FROM avesacad_avesacademy.student_db WHERE student_id=".$studentida;
                        $result1=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
			if(!$row1=mysqli_fetch_array($result1)){
			
				
				if($i != 0){
					echo ',';
				}
				
				echo '{"id":"'.$ida.'","file":"'.$filea.'","filetype":"'.$filetypea.'","studentid":"'.$studentida.'","like":"'.$likea.'","studentclass":"'.$studentclassa.'","articledate":"'.$articledate.'"}';

				$i++;
				
				
			}
			
				
                       

			
		}
		echo ']}';
            }
            
  
            if(@$_GET['all'] == 1){
                $conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');		
                
                $offset = @$_GET['offset'];	
		$sql = "SELECT * FROM avesacad_avesacademy.article_db WHERE article_status=1 and article_visibility='public' ORDER BY article_insertdate DESC LIMIT 10 OFFSET ".$offset;	
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		
		echo '{"articles":[';
		$i = 0;
		while($row=mysqli_fetch_array($result)){
			
			$ida= $row['article_id'];
			$filea= $row['article_file'];
			$filetypea = $row['article_filetype'];
			$studentida = $row['article_studentid'];
                        $likea = $row['article_like']; 
                        $studentclassa = $row['article_studentclass']; 
                        $articledate = $row['article_insertdate'];
                                                
                        $articledate = getArticleDate($articledate);
			                        
                        $sql = "SELECT * FROM avesacad_avesacademy.student_db WHERE student_id=".$studentida;
                        $result1=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
			if($row1=mysqli_fetch_array($result1)){
			
				$name = $row1['student_name'];
				$image = $row1['student_image'];
				$teacherid = $row1['student_teacherid'];
				if($i != 0){
					echo ',';
				}
				
				echo '{"id":"'.$ida.'","name":"'.$name.'","image":"'.$image.'","file":"'.$filea.'","filetype":"'.$filetypea.'","studentid":"'.$studentida.'","like":"'.$likea.'","teacherid":"'.$teacherid.'","studentclass":"'.$studentclassa.'","articledate":"'.$articledate.'"}';

				$i++;
				
				
			}
			
				
                       

			
		}
		echo ']}';
            }
            
            //teacher's class articles
            if(@$_GET['all'] == 2 and @$_GET['teacherid']){
            
            	$teacherid= @$_GET['teacherid'];
            
                $conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');			
		$sql = "SELECT student_id FROM avesacad_avesacademy.student_db WHERE student_teacherid='".$teacherid."'";
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		
		$i =0;	
		while($row=mysqli_fetch_array($result)){
			$id[$i] = $row[0];
			$i++;
		}
		$offset = @$_GET['offset'];	
		$sql = "SELECT * FROM avesacad_avesacademy.article_db WHERE article_studentid IN  (" . implode(',', array_map('intval', $id)) . ') ORDER BY article_insertdate DESC LIMIT 10 OFFSET '.$offset;		
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		
		echo '{"articles":[';
		$i = 0;
		while($row=mysqli_fetch_array($result)){
			
			$ida= $row['article_id'];
			$filea= $row['article_file'];
			$filetypea = $row['article_filetype'];
			$studentida = $row['article_studentid'];
                        $likea = $row['article_like']; 
                        $status = $row['article_status']; 
                        $articledate = $row['article_insertdate'];
                        
                        $articledate = getArticleDate($articledate);
			                        
                        $sql = "SELECT * FROM avesacad_avesacademy.student_db WHERE student_id=".$studentida;
                        $result1=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
			if($row1=mysqli_fetch_array($result1)){
			
				$name = $row1['student_name'];
				$image = $row1['student_image'];
				$teacherid = $row1['student_teacherid'];
				if($i != 0){
					echo ',';
				}
				
				echo '{"id":"'.$ida.'","name":"'.$name.'","image":"'.$image.'","file":"'.$filea.'","filetype":"'.$filetypea.'","studentid":"'.$studentida.'","like":"'.$likea.'","teacherid":"'.$teacherid.'","status":"'.$status.'","articledate":"'.$articledate.'"}';

				$i++;
				
				
			}
			
		}
		echo ']}';
            }
            
            if(@$_GET['all'] == 3 and @$_GET['teacherid']){
            
            	$teacherid= @$_GET['teacherid'];
            
                $conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');			
		$sql = "SELECT student_id FROM avesacad_avesacademy.student_db WHERE student_teacherid='".$teacherid."'";
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		
		$i =0;	
		while($row=mysqli_fetch_array($result)){
			$id[$i] = $row[0];
			$i++;
		}
		$offset = @$_GET['offset'];	
		$sql = "SELECT * FROM avesacad_avesacademy.article_db WHERE article_status=1 and article_visibility='private' and article_studentid IN  (" . implode(',', array_map('intval', $id)) . ') ORDER BY article_insertdate DESC LIMIT 10 OFFSET '.$offset;	
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		
		echo '{"articles":[';
		$i = 0;
		while($row=mysqli_fetch_array($result)){
			
			$ida= $row['article_id'];
			$filea= $row['article_file'];
			$filetypea = $row['article_filetype'];
			$studentida = $row['article_studentid'];
                        $likea = $row['article_like']; 
                        $status = $row['article_status']; 
                        $articledate = $row['article_insertdate'];
                        
                        $articledate = getArticleDate($articledate);
			                        
                        $sql = "SELECT * FROM avesacad_avesacademy.student_db WHERE student_id=".$studentida;
                        $result1=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
			if($row1=mysqli_fetch_array($result1)){
			
				$name = $row1['student_name'];
				$image = $row1['student_image'];
				$teacherid = $row1['student_teacherid'];
				if($i != 0){
					echo ',';
				}
				
				echo '{"id":"'.$ida.'","name":"'.$name.'","image":"'.$image.'","file":"'.$filea.'","filetype":"'.$filetypea.'","studentid":"'.$studentida.'","like":"'.$likea.'","teacherid":"'.$teacherid.'","status":"'.$status.'","articledate":"'.$articledate.'"}';

				$i++;
				
				
			}
			
		}
		echo ']}';
          }
        
        
        if(@$_GET['all'] == 4 and @$_GET['studentid']){
            
            	$studentid = @$_GET['studentid'];
            	$offset = @$_GET['offset'];	
            
                $conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');			
		$sql = "SELECT * FROM avesacad_avesacademy.article_db WHERE article_studentid='".$studentid ."' ORDER BY article_insertdate DESC LIMIT 10 OFFSET ".$offset;		
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		
		echo '{"articles":[';
		$i = 0;
		while($row=mysqli_fetch_array($result)){
			
			$ida= $row['article_id'];
			$filea= $row['article_file'];
			$filetypea = $row['article_filetype'];
                        $likea = $row['article_like']; 
                        $studentclassa = $row['article_studentclass']; 
                        $articledate = $row['article_insertdate'];
                        
                        $articledate = getArticleDate($articledate);

			if($i != 0){
				echo ',';
			}
			//echo json_encode($obj);
			echo '{"id":"'.$ida.'","file":"'.$filea.'","filetype":"'.$filetypea.'","like":"'.$likea.'","studentclass":"'.$studentclassa.'","articledate":"'.$articledate.'"}';
			$i++;
		}
		echo ']}';
            }
            
            if(@$_GET['all'] == 5 and @$_GET['teacherid']){
            
            	$teacherid= @$_GET['teacherid'];
            
                $conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');			
		$sql = "SELECT * FROM avesacad_avesacademy.student_db WHERE student_teacherid='".$teacherid."'";
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		
		echo '{"students":[';
		$i = 0;
		while($row=mysqli_fetch_array($result)){
			
			$id= $row['student_id'];
			$name= $row['student_name'];
			$studentclass= $row['student_class'];
			$username= $row['student_username'];
			$password= $row['student_password'];
			$profileimage= $row['student_image'];
			if($i != 0){
				echo ',';
			}
			//echo json_encode($obj);
			echo '{"id":'.$id.',"name":"'.$name.'","studentclass":"'.$studentclass.'","username":"'.$username.'","password":"'.$password.'","profileimage":"'.$profileimage.'"}';
			$i++;
		}
		echo ']}';
            }
            if(@$_GET['all'] == 6 and @$_GET['articleid']){
	            	
	                $conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');			
			$sql = "SELECT * FROM avesacad_avesacademy.article_comments WHERE article_id=".$_GET['articleid'];
			$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		
			echo '{"comments":[';
			$i = 0;
			while($row=mysqli_fetch_array($result)){
				$commentid = $row['id'];
				$comment = $row['comment'];					
				$teacherid = $row['teacher_id'];
				$date = $row['created_at'];
				
				$date = getArticleDate($date);
				
				$sql = "SELECT * FROM avesacad_avesacademy.teacher_db WHERE teacher_id='".$teacherid."'";
		                $result1=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
				if($row1=mysqli_fetch_array($result1)){
					
					$teachername = $row1['teacher_name'];
					$teacherimage = "none";//$row1['teacher_name'];
						
					if($i != 0){
						echo ',';
					}
						
					echo '{"id":"'.$commentid.'","comment":"'.$comment.'","teachername":"'.$teachername.'","teacherimage":"'.$teacherimage.'","comment_date":"'.$date.'"}';
		
					$i++;
				
				
				}
			
			}
			echo ']}';
            }
  }



function getArticleDate($articledate){
			
			$splitTimeStamp = explode(" ",$articledate);
			$date = $splitTimeStamp[0];
			$datearray = explode("-",$date);
                        $currentdate = date('Y-m-d');
                        $dateObj   = DateTime::createFromFormat('!m', $datearray[1]);
			$monthName = $dateObj->format('F'); 
                        
                        if($currentdate == $date){
                        	$articledate = "Today-";
                        }else if($datearray[2] == (date('d')-1) && $datearray[1] == (date('m')) && $datearray[0] == (date('Y'))){
                        	$articledate = "Yesterday-";
                        }else{
                        	$articledate = $datearray[2]." ".$monthName." ".$datearray[0]."-";
                        }
                        return $articledate;	
}
?>