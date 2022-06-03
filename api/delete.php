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
		
			$studentid= $decoded['student_id'];
		
			$conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');			
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			$sql = "DELETE FROM avesacad_avesacademy.student_db WHERE student_id=".$studentid;
			
			if ($conn->query($sql) === TRUE) {
			    echo "record deleted successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			
			$conn->close();
			
	}else if($type == 2){
		
			$articleid = $decoded['article_id'];
			$articlename = $decoded['filename'];
			$articletype = $decoded['filetype'];
			if($articletype == "image"){
				$location = "../upload/articleimage/";
			}else if($articletype == "video"){
				$location = "../upload/articlevideo/";
			}else if($articletype == "pdf"){
				$location = "../upload/articlepdf/";
			} 			
		
			$conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');			
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			$sql = "DELETE FROM avesacad_avesacademy.article_db WHERE article_id=".$articleid;
			
			if ($conn->query($sql) === TRUE) {
			    if(unlink($location.$articlename)){
    			    	echo "Success:record deleted successfully";
    			    }else{
    			    	echo "Error:";
    			    }			   
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			
			$conn->close();
			
	}
	
?>	