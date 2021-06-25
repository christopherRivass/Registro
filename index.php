<?php
include 'conct.php';
$consulRegistros=("select * from datAlumnos");
$respuestaReg=mysqli_query($conn,$consulRegistros);
$totalrows=mysqli_num_rows($respuestaReg);

$cupos=30;
if($_POST["form"]){
    if($_POST['setDat']==true){

    }
}
?>
