
<?php
error_reporting(0);
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
    }
}
// valida fecha
?>
