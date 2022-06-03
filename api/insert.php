<?php
	
	//Make sure that it is a POST request.
	if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
	    throw new Exception('Request method must be POST!');
	}
	 
	//Make sure that the content type of the POST request has been set to application/json
	$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
	if(strcasecmp($contentType, 'application/json') != 0){
	    throw new Exception('Content type must be: application/json');
	}
	 
	//Receive the RAW post data.
	$content = trim(file_get_contents("php://input"));
	 
	//Attempt to decode the incoming RAW post data from JSON.
	$decoded = json_decode($content, true);
	 
	//If json_decode failed, the JSON is invalid.
	if(!is_array($decoded)){
	    throw new Exception('Received content contained invalid JSON!');
	}
 
	//Process the JSON.
	
	date_default_timezone_set('Asia/Kolkata');
	$type = $decoded['type'];
	if($type == 1){
	
		$articleid= $decoded['articleid'];
		$teacherid = $decoded['teacherid'];
		$comment = $decoded['comment'];        	
		$date = date('Y-m-d H:i:s');
	
		$conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "INSERT INTO avesacad_avesacademy.article_comments (article_id, teacher_id, comment, created_at) VALUES ('".$articleid."', '".$teacherid."','".$comment."','".$date."')";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
		
	}else if($type == 2){
		
		$student_name = $decoded['student_name'];
		$student_class = $decoded['student_class'];		
		$teacher_id = $decoded['teacher_id'];
		$location = "../app/public/assets/images/";
		if($decoded['profile_image']){
			$profile_image = $decoded['profile_image'];
		        $filename = mt_rand(100000,999999).".jpg";
			$binary=base64_decode($profile_image);
        		header('Content-Type: bitmap; charset=utf-8');
		        $file = fopen($location.$filename, 'wb');
		        fwrite($file, $binary);
		        fclose($file);
		}else{
			$filename = "8547.jpg";
		}
		$username = $student_name.mt_rand(1000,9999);
		$password = mt_rand(10000,99999);
		
		echo $student_name;
		
		$conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "INSERT INTO `avesacad_avesacademy`.`student_db` (`student_name`, `student_address`, `student_image`, `student_phone`, `student_email`, `student_username`, `student_password`, `student_teacherid`, `student_class`, `student_school`, `student_dob`, `student_admissionyear`, `student_status`, `student_insertdate`, `student_updatedate`) VALUES ('".$student_name."', '', '".$filename."', '', '', '".$username."', '".$password."', '".$teacher_id."', '".$student_class."', '', NULL, '', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();		
				
	}else if($type == 3){
						
		$article_id = $decoded['article_id'];
		$status = $decoded['status'];
		
		if($status){
			$sql = 'UPDATE `avesacad_avesacademy`.`article_db` SET article_status=1 WHERE article_id='.$article_id;
		}else{
			$sql = 'UPDATE `avesacad_avesacademy`.`article_db` SET article_status=0 WHERE article_id='.$article_id;
		}
		
		$conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		if ($conn->query($sql) === TRUE) {
		    echo "status updated";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();	
				
	}else if($type == 4){
						
		$student_name = $decoded['student_name'];
		$student_class = $decoded['student_class'];		
		$teacher_id = $decoded['teacher_id'];
		$student_id = $decoded['student_id'];
	
		$location = "../app/public/assets/images/";
		if($decoded['profile_image'] != ""){
			$profile_image = $decoded['profile_image'];
		        $filename = $decoded['profile_image_name'];
			$binary=base64_decode($profile_image);
        		header('Content-Type: bitmap; charset=utf-8');
		        $file = fopen($location.$filename, 'wb');
		        fwrite($file, $binary);
		        fclose($file);
		}else{
			$filename = "8547.jpg";
		}
		 echo $filename;
		
				
		$sql = "UPDATE `avesacad_avesacademy`.`student_db` SET `student_image`='".$filename."',`student_name`='".$student_name."',`student_class`='".$student_class."' WHERE `student_db`.`student_id` = ".$student_id;
		
		
		$conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		if ($conn->query($sql) === TRUE) {
		    echo "updated";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		//echo exec('whoami'); 
		
		$conn->close();	
				
	}
	
?>
