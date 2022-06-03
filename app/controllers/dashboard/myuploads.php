<?php

if(!isset($_SESSION['aves_uid'])){
    redirectRoute('dashboard/login');
}

$type = $_SESSION['aves_type'];

if($type === "teacher"){
    redirectRoute('dashboard/login');
}else{
    

    
     //Fetch the student posts
    $q = $db->query("SELECT * FROM article_db INNER JOIN student_db ON student_db.student_id = article_db.article_studentid WHERE student_db.student_id = ".$db->quote($_SESSION['aves_uid'])." ORDER BY article_db.article_id DESC");
    $articles = $q->fetchAll();
}

function getComments($articleId,$db){
    
    $q = $db->query("SELECT * FROM article_comments INNER JOIN teacher_db ON teacher_db.teacher_id = article_comments.teacher_id WHERE article_comments.article_id =".$db->quote($articleId));
    return $q->fetchAll();
}