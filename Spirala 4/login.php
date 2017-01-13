<?php

session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Greska username ili pass!";
}
else  {
$veza = new PDO("mysql:dbname=beautysalon;host=localhost;charset=utf8", "zerina", "wtspirala4");
$veza->exec("set names utf8");
    
$username= htmlspecialchars($_POST['username']);
$password= htmlspecialchars($_POST['password']);  
     
$rezultati=$veza->query("SELECT id,username,password FROM `korisnici` order by id asc;");
 if (!$rezultati) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }       

foreach($rezultati as $korisnik){
if (strcmp($username ,$korisnik['username']) && strcmp($password, $korisnik['password'])) {
$_SESSION['login_user']= $username;
header("location: admin.php");
} 
}
}
$error = "Greska username ili pass!";
    
}
?>
