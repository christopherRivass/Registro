<?php
include 'conct.php';
require 'classPHP/person.php';
$consulRegistros=("select * from datAlumnos");
$respuestaReg=mysqli_query($conn,$consulRegistros);
$totalrows=mysqli_num_rows($respuestaReg);

$cupos=30;
if(isset($_POST["saveInfo"])){
    echo "saving...";
}

?>
