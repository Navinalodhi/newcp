<?php

if(isset($_SESSION['aves_uid'])){
    redirectRoute('dashboard/index');
}

if(isset($_POST['signup'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    
    $q = $db->query("SELECT COUNT(*) FROM teacher_db WHERE teacher_username = ".$db->quote($username));
    $count = $q->fetchColumn();
    
    if($count > 0){
       redirectRoute('dashboard/login',array('error' => 1, 'msg' => 'Username already exists!')); 
    }else{
        $q = $db->prepare("INSERT INTO teacher_db (teacher_name,teacher_username,teacher_password,teacher_class) VALUES (?,?,?,?)");
        $result = $q->execute(array($name,$username,$password,$class));
    }
    
    
    if($result){
        //Set the session
        $_SESSION['aves_uid'] = $db->lastInsertId();
        $_SESSION['aves_type'] = 'teacher';
        
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