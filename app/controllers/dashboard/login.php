<?php

if(isset($_SESSION['aves_uid'])){
    redirectRoute('dashboard/index');
}

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    
    if($type === "teacher"){
        $q = $db->prepare("SELECT * FROM teacher_db WHERE teacher_username = ? AND teacher_password = ? ");
    }else{
        $q = $db->prepare("SELECT * FROM student_db WHERE student_username = ? AND student_password = ? ");
    }
    
    $q->execute(array($username,$password));
    
    $result = $q->fetch();
    
    if($result){
        //Set the session
        $_SESSION['aves_uid'] = (isset($result['teacher_id']))? $result['teacher_id'] : $result['student_id'];
        $_SESSION['aves_type'] = $type;
        
        redirectRoute('dashboard/index');
    }else{
        redirectRoute('dashboard/login',array('error' => 1, 'type' => $type));
    }
}

if(isset($_GET['type'])){
    $type = $_GET['type'];
}else{
    $type = 'student';
}