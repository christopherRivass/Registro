<?php
include 'conct.php';
$consulRegistros=("select * from datAlumnos");
$respuestaReg=mysqli_query($conn,$consulRegistros);
$totalrows=mysqli_num_rows($respuestaReg);

echo "El numero de resgistros es:$totalrows"
?>
