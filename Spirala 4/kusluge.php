<script>
function prikaziDetalje(naziv) {
  
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("detaljiusluge").innerHTML=this.responseText;
      document.getElementById("detaljiusluge").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","detaljiusluge.php?q="+naziv,true);
  xmlhttp.send();
}


</script>
	<div class="kolona tri">
		<div class="underline"> <h1>Kozmetičke usluge</h1></div>
        <br>
		<?php
        if (file_exists("Kusluge.xml")) {
        $xml = simplexml_load_file("Kusluge.xml");
        print "<table style='text-align:left; margin-left:30%; margin-right:30%; width:40%;'>";
        print "<tr><th>Naziv usluge</th><th>Cijena</th></tr>";
       
        foreach($xml->kusluga as $kusluga){
        print "<tr><td><a href='#' onclick='prikaziDetalje($kusluga->naziv)'>".$kusluga->naziv."</a></td><td>".$kusluga->cijena."KM</td></tr>";

        }
         print "</table>";
        }
        ?>
       
	</div>

<div class="kolona jedan">
<div class="underline"> <h1>Opis</h1></div>
<div id="detaljiusluge">

</div>

</div>
