<?php

if(!isset($_SESSION['aves_uid'])){
    redirectRoute('dashboard/login');
}

$type = $_SESSION['aves_type'];

if($type === "teacher"){
    redirectRoute('dashboard/login');
}else{
    
    //Get My Class
    $q = $db->query("SELECT student_class FROM student_db WHERE student_id =".$db->quote($_SESSION['aves_uid']));
    $myClass = $q->fetchColumn();
    
     //Fetch the student posts
    $q = $db->query("SELECT * FROM article_db INNER JOIN student_db ON student_db.student_id = article_db.article_studentid WHERE student_db.student_class = $myClass ORDER BY article_db.article_id DESC");
    $articles = $q->fetchAll();
}