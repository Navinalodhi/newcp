<?php
if($_GET['username'] and $_GET['password']){


		$username = $_GET['username'];
		$password = $_GET['password'];
		$conn= mysqli_connect('localhost','avesacad_root','kI3f)_:CP4');		
		
		
		
	 	
            if(@$_GET['type'] == 'student'){
            
            	$sql = "SELECT * FROM avesacad_avesacademy.student_db WHERE student_username='".$username."' and student_password='".$password."'";
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		echo '{"user":[';
		$i = 0;
		while($row=mysqli_fetch_array($result)){
			
			$id= $row['student_id'];
			$student_name= $row['student_name'];
			$student_image= $row['student_image'];
			$student_status= $row['student_status'];
			$student_class= $row['student_class'];
			$teacher_id= $row['student_teacherid'];
			
			if($i != 0){
				echo ',';
			}
			echo '{"id":"'.$id.'","name":"'.$student_name.'","image":"'.$student_image.'","student_status":"'.$student_status.'","teacher_id":"'.$teacher_id.'","student_class":"'.$student_class.'"}';
			$i++;
		
                }  
                echo ']}';         

            	
            }else if(@$_GET['type'] == 'teacher'){
            
            	$sql = "SELECT * FROM avesacad_avesacademy.teacher_db WHERE teacher_username='".$username."' and teacher_password='".$password."'";
		$result=mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
		echo '{"user":[';
		$i = 0;
		while($row=mysqli_fetch_array($result)){
			
			$id= $row['teacher_id'];
			$teacher_name= $row['teacher_name'];
			$teacher_status= $row['teacher_status'];
			$teacher_image= $row['teacher_image'];
			
			if($i != 0){
				echo ',';
			}
			echo '{"id":"'.$id.'","name":"'.$teacher_name.'","image":"'.$teacher_image.'","teacher_status":"'.$teacher_status.'"}';
			$i++;
		
                }  
                echo ']}';         
            
            }else{
            
            }
}
?>            