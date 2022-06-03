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
    $q = $db->query("SELECT * FROM article_db INNER JOIN student_db ON student_db.student_id = article_db.article_studentid WHERE student_db.student_teacherid = ".$db->quote($_SESSION['aves_uid'])."ORDER BY article_db.article_insertdate DESC");
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


if(isset($_GET['a'])){
	if($_GET['a'] === 'publish'){	
		$id = $_GET['id'];
		$db->query("UPDATE article_db SET article_status = 1 WHERE article_id = ".$db->quote($_GET['id']));
		redirectRoute('dashboard/index');
	}
	
	if($_GET['a'] === 'unpublish'){	
		$id = $_GET['id'];
		$db->query("UPDATE article_db SET article_status = 0 WHERE article_id = ".$db->quote($_GET['id']));
		redirectRoute('dashboard/index');
	}

	if($_GET['a'] === 'delete'){
		if(verifySignature($_GET['id'])){
			$db->query("DELETE FROM article_comments  WHERE id = ".$db->quote($_GET['id']));
			redirectRoute('dashboard/index',array('msg' => 'Your comment has been deleted'));
		}else{
			redirectRoute('dashboard/index',array('msg' => 'Error Occured'));
			
		}
	}
	if($_GET['a'] === 'deletearticle'){
		if(verifySignature($_GET['id'])){
			$db->query("DELETE FROM article_db  WHERE article_id = ".$db->quote($_GET['id']));
			
			redirectRoute('dashboard/index',array('msg' => 'Article has been deleted'));
		}else{
			redirectRoute('dashboard/index',array('msg' => 'Error Occured'));
			
		}
	}
}

if(isset($_POST['publishComment'])){
	$comment = $_POST['comment'];
	$articleId = $_POST['articleId'];
	
	$q = $db->prepare("INSERT INTO article_comments (article_id,teacher_id,comment) VALUES (?,?,?)");
	$q->execute(array($articleId,$_SESSION['aves_uid'],$comment));
	
	redirectRoute('dashboard/index',array('msg' => 'Your comment has been posted'));
	
}
if(isset($_POST['saveComment'])){
	$comment = $_POST['comment'];
	$articleId = $_POST['commentId'];
	$q = $db->prepare("UPDATE article_comments SET comment = ? WHERE id = ?");
	$q->execute(array($comment,$articleId));

	redirectRoute('dashboard/index',array('msg' => 'Your comment has been updated'));
	
}
function getComments($articleId,$db){
    
    $q = $db->query("SELECT * FROM article_comments INNER JOIN teacher_db ON teacher_db.teacher_id = article_comments.teacher_id WHERE article_comments.article_id =".$db->quote($articleId));
    return $q->fetchAll();
}


