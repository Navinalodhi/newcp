<?php

if(isset($_POST['id'])){
    $db->query("UPDATE article_db SET article_like = article_like-1 WHERE article_id = ".$db->quote($_POST['id']));
}