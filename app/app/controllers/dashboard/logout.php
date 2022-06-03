<?php

session_destroy();
if(isset($_COOKIE['login']));
{
	unset($_COOKIE['login']);
	$cookie_name = "login";
    $cookie_value = false;
    setcookie($cookie_name, $cookie_value,time() -1,'/','colorpencil.me');
}
redirectRoute('dashboard/login');
