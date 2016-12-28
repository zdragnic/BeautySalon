<?php
session_start();// Starting Session
$user_check=$_SESSION['login_user'];

$login_session =$user_check;
if(!isset($login_session)){
header('Location: pocetna.php'); // Redirecting To Home Page
}

?>
