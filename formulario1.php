
<?php

// valida fecha
$fechadia=$_POST['dia'];
$fechames=$_POST['mes'];
$Anor=$_POST['ano'];
if(($_POST['dia'] != "") && ($_POST['mes'] != "") &&  ($_POST['ano'] != "")){
    if (checkdate($fechames, $fechadia, $Anor)) {
    $fechaValida=true;
    } else {
    $fechaValida=false;
    $valido=false;
    print("buenas tardes".$_REQUEST['dia'].);
    }
}
// valida fecha
?>

<?php
error_reporting(0);
   $nombre= $_POST['nom'];
   $dia  = date ("j");
   $mes  = date ("n");
   $anyo = date ("Y");
  if($_POST['nom'] != ""){


    print("buenas tardes".$_REQUEST['dia'].);

   printf("<table bordercolor=#006  background=imagenes/luna.jpg>");
   print ("<tr><td>"."<strong>&nbsp;HOLA</strong> como esta tu dia  "."&nbsp;"."<strong>".$_REQUEST['nom']."</strong>"."<br>\n"."&nbsp;hoy"." ".  $dia . " de " . nombreMes($mes) . " <strong>a�o</strong> ". $anyo .""."<strong>. asi</strong> eres en el <strong>UNIVERSO...</strong>"."</td></tr>". "\n");

printf("</table>"."<br>");


printf("<img src=imagenes/z4.jpg width=25 height=25>");
print ("&nbsp;Signo del <strong>ZODIACO</strong>"."");
echo ("&nbsp;".$signo."<br>"."<br>");


printf("<img src=ani/ochino.gif width=25 height=25>");
print ("<strong>CALENDARIO CHINO</strong>"." ");
echo (" "."$chino"."<br>"."<br>");



printf("<img src=imagenes/lo.jpg width=25 height=25>");
print ("&nbsp;Tu"." "."<strong>ELEMENTO</strong> es"." ".$metal."<br>"."<br>");

printf("<img src=ani/Peaceful.gif width=25 height=25>");
print ("&nbsp;Tu"." "."<strong>COLOR</strong> es"." ".$color."<br>"."<br>");


printf("<img src=imagenes/planeta2.jpg width=25 height=25>");
print ("&nbsp;Tu"." "."<strong>PIEDRA</strong>"." ".$piedra."<br>"."<br>");




printf("<img src=imagenes/mundo.png width=27 height=27>");
printf ("&nbsp;"."Tu"." "."<strong>PLANETA ES</strong>"." ".$planeta);





print ("<h2>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_REQUEST['nom']."&nbsp;"."TU DIA DE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUERTE ES??"."</h2>");


printf ("<table align=center  background=ani/ESTRASA.gif border=3 CELLPADDING=10>");

printf("<tr><td>"."<h3>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."LA galleta de la fortuna &nbsp;&nbsp;&nbsp; dice ?"."</h3>".("$frases[$aleatorio]")."</td>"."</tr>");
printf("</table>");
}
?>
