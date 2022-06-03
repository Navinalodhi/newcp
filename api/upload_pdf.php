<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
	 $result = array("success" => $_FILES["pdf"]["name"]);
	 if($_POST['id'] ){
	 	if($_POST['visibility']){
			 $file_name = $_FILES['pdf']['name']; 
			 $file_size = $_FILES['pdf']['size'];
			 $file_type = $_FILES['pdf']['type'];
			 $temp_name = $_FILES['pdf']['tmp_name'];
			 
			 $articlename = "";
			 $student_id = $_POST['id'];
			 $visibility = $_POST['visibility'];
			 
			 $location = "../upload/articlepdf/";
			 
			 $conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');		
			 $sql = "INSERT INTO `avesacad_avesacademy`.`article_db` (`article_name`, `article_description`, `article_file`, `article_filetype`, `article_studentid`, `article_visibility`, `article_status`, `article_like`, `article_category`, `article_studentclass`, `article_tag`, `article_insertdate`, `article_updatedate`, `article_privacy`) VALUES ('$articlename', NULL, '$file_name', 'pdf', '$student_id', '$visibility', '0', '0', NULL, '', NULL, CURRENT_TIMESTAMP, NULL, '')";
			 
			 if(mysqli_query($conn,$sql)){ 
				 if(move_uploaded_file($temp_name, $location.$file_name)){
				 	$result = array("success" => "File successfully uploaded");
				 }else{
				 	$result = array("success" => "error uploading file");
				 }
			}else{
				$result = array("success" => "error uploading file");
			}	 
		 }else{
		 	$result = array("success" => "some values absent.");
		 }
	 }else{
	 	$result = array("success" => "no id");
	 }
 }
 echo json_encode($result, JSON_PRETTY_PRINT);
 ?>