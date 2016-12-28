<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: pocetna.php"); // Redirecting To Home Page
}
?>