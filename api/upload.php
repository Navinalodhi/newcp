<?php

$result = array("success" => "no data"); 
if($_SERVER['REQUEST_METHOD']=='POST'){
	if($_POST['id'] ){
	 	if($_POST['visibility']){
			$file_name = $_FILES['image']['name']; 
			$file_size = $_FILES['image']['size'];
			$file_type = $_FILES['image']['type'];
			$temp_name = $_FILES['image']['tmp_name'];
			
			$articlename = "new";
			$student_id = $_POST['id'];
			$visibility = $_POST['visibility'];
			 
			$id = mt_rand(100000,999999); 
			$filename = "$id.jpg";
			
			$location = "../upload/articleimage/";
			 
			$conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');		
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				exit();
			}
			
			$sql = "INSERT INTO `avesacad_avesacademy`.`article_db` (`article_name`, `article_description`, `article_file`, `article_filetype`, `article_studentid`, `article_visibility`, `article_status`, `article_like`, `article_category`, `article_studentclass`, `article_tag`, `article_insertdate`, `article_updatedate`, `article_privacy`) VALUES ('$articlename', NULL, '$filename', 'image', '$student_id', '$visibility', '0', '0', NULL, '', NULL, CURRENT_TIMESTAMP, NULL, '')";
			 
			if(mysqli_query($conn,$sql)){ 
				if(move_uploaded_file($temp_name, $location.$filename)){
				 	$result = array("success" => "File successfully uploaded");
				}else{
				 	$result = array("success" => "error uploading file");
				}
			}else{
				$result = array("success" => "error uploading file". mysqli_error($conn));
			}	 
		} else {
			$result = array("success" => "some values absent.");
		}	 
	}else{
		 	$result = array("success" => "no id");
	}
}
 echo json_encode($result, JSON_PRETTY_PRINT);
 
 ?>