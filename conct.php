<?php
$user='chris';
$contra='Tsukujomy[19]';
$servidor='localhost';
$baseDedatos='Alumnos';
$conn=mysqli_connect($servidor,$user,$contra,$baseDedatos);
// Sentencia SQL
$consulta = "SELECT * FROM datAlumnos;";

//Asi se hace una consulta para mysql
//$resultado = mysqli_query($conn,$consulta);
