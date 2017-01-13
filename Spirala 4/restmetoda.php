<?php

header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
header('Content-Type: aplication/json');
header('Access-Control-Allow-Origin: *');

//KONEKCIJA NA BAZU

$veza = new PDO("mysql:dbname=beautysalon;host=localhost;charset=utf8", "zerina", "wtspirala4");
$veza->exec("set names utf8");
$veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$method = $_SERVER['REQUEST_METHOD'];


function dohvatiSve(){
    $veza = new PDO("mysql:dbname=beautysalon;host=localhost;charset=utf8", "zerina", "wtspirala4");
$veza->exec("set names utf8");
$veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$method = $_SERVER['REQUEST_METHOD'];
 $sql = "select * FROM `fusluge`ORDER BY id";
    try {
        $stmt = $veza->query($sql);
        $usluge = $stmt->fetchAll(PDO::FETCH_OBJ);
        $veza = null;
        echo '{"USLUGE": ' . json_encode($usluge) . '}';
    } catch(PDOException $e) {
        echo '{"GRESKA":{"text":'. $e->getMessage() .'}}';
    }
    
}

function dohvatiID($id){
    $veza = new PDO("mysql:dbname=beautysalon;host=localhost;charset=utf8", "zerina", "wtspirala4");
$veza->exec("set names utf8");
$veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * FROM `fusluge` WHERE `id`='$id' ORDER BY id";
    try {
        $stmt = $veza->query($sql);
        $usluge = $stmt->fetchAll(PDO::FETCH_OBJ);
        $veza = null;
        
        echo '{"USLUGE": ' . json_encode($usluge) . '}';
    } catch(PDOException $e) {
        echo '{"GRESKA":{"text":'. $e->getMessage() .'}}';
    }  

}

if($method == 'GET'){
if(isset($_GET['q'])){
    dohvatiID($_GET['q']);
}
else{
    dohvatiSve();
}

}

?>