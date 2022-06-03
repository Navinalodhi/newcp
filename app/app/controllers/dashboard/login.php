<?php

if(isset($_SESSION['aves_uid'])){
    redirectRoute('dashboard/index');
}

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status=1;
    $type = $_POST['type'];
    
    if($type === "teacher"){
        $q = $db->prepare("SELECT * FROM teacher_db WHERE teacher_username = ? AND teacher_password = ? AND teacher_status = ?");
    }else{
        $q = $db->prepare("SELECT * FROM student_db WHERE student_username = ? AND student_password = ? AND student_status = ?");
    }
    
    $q->execute(array($username,$password,$status));
    
    $result = $q->fetch();
    
    if($result){
        //Set the session
        $_SESSION['aves_uid'] = (isset($result['teacher_id']))? $result['teacher_id'] : $result['student_id'];
        $_SESSION['aves_type'] = $type;
        $cookie_name = "login";
        $cookie_value = true;
        setcookie($cookie_name, $cookie_value,time() + 2*7*24*60*60,'/','colorpencil.me');
        if($type=="teacher")
        {
        redirectRoute('dashboard/index');
        }
        else
        {
            redirectRoute('dashboard/myclass');
        }
    }else{
        redirectRoute('dashboard/login',array('error' => 1, 'type' => $type));
    }
}

if(isset($_GET['type'])){
    $type = $_GET['type'];
}else{
    $type = 'student';
}
