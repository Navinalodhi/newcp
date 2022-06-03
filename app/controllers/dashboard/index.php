<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
if(!isset($_SESSION['aves_uid'])){
    redirectRoute('dashboard/login');
}



$type = $_SESSION['aves_type'];

if($type === "teacher"){
    //echo "SELECT * FROM article_db INNER JOIN student_db ON student_db.student_id = article_db.article_studentid WHERE student_db.student_teacherid = ".$db->quote($_SESSION['aves_uid']);
    //Fetch the student posts
    $q = $db->query("SELECT * FROM article_db INNER JOIN student_db ON student_db.student_id = article_db.article_studentid WHERE student_db.student_teacherid = ".$db->quote($_SESSION['aves_uid']));
    $articles = $q->fetchAll();
    
    $q = $db->query("SELECT teacher_name FROM teacher_db WHERE teacher_id = ".$db->quote($_SESSION['aves_uid']));
    $name = $q->fetchColumn();
    
}else{
     //Fetch the student posts
    $q = $db->query("SELECT * FROM article_db INNER JOIN student_db ON student_db.student_id = article_db.article_studentid WHERE article_db.article_privacy = 'public'");
    $articles = $q->fetchAll();
    
    $q = $db->query("SELECT student_name FROM student_db WHERE student_id = ".$db->quote($_SESSION['aves_uid']));
    $name = $q->fetchColumn();
}