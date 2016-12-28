<?php
 if (file_exists("Kusluge.xml")) {
 $xmlDoc = simplexml_load_file("Kusluge.xml");

$q=$_GET["q"];

if (strlen($q)>0) {
  $hint="";
$brojac=0;
  foreach($xmlDoc->kusluga as $kusluga) {
    $y=$kusluga->naziv;
    $z=$kusluga->cijena;
    
      if (stristr($y,$q) && stristr($z,$q)== false  ) {
        if ($hint=="") {
          $hint="<a href='kusluge.php'>".
          $y." ". $z. "KM </a>";
            $brojac++;
            }
         
         else {
          $hint= $hint. "<br><a href='kusluge.php'>".
          $y ." ". $z . "KM </a>";
           $brojac++;
        } 
          
        if($brojac==3 && isset($_REQUEST['prikazisve'])== false )break;
 }
    
    if (stristr($y,$q)==false && stristr($z,$q)  ) {
        if ($hint=="") {
          $hint="<a href='kusluge.php'>".
          $y." ". $z. "KM </a>";
            $brojac++;
            }
         
         else {
          $hint= $hint. "<br/><a href='kusluge.php'>".
          $y ." ". $z . "KM </a>";
           $brojac++;
        } 
        if($brojac==3 && isset($_REQUEST['prikazisve'])== false )break;
 }   
      if (stristr($y,$q) && stristr($z,$q)  ) {
        if ($hint=="") {
          $hint="<a href='kusluge.php'>".
          $y." ". $z. "KM </a>";
            $brojac++;
            }
         
         else {
          $hint= $hint. "<br/><a href='kusluge.php'>".
          $y ." ". $z . "KM </a>";
           $brojac++;
        } 
         if($brojac == 9) break;
}   
      
   if($brojac==3 && isset($_REQUEST['prikazisve'])== false )break;
  }}
      

    
if ($hint=="") {
  $response="Nema nađenih rezultata";
} else {
  $response=$hint;
}
 }
//output the response

echo $response;
?>