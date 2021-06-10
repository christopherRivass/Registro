<?php
$servername='localhost';
$database='Alumnos';
$username='chris';
$password='Tsukujomy[19]';

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	echo 'not fund database'.mysqli_connect_error();
}
echo 'Bienvenido a BBDD';
?>
