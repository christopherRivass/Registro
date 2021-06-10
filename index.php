<?php
$server='localhost';
$user='chris';
$password='Tsukujomy[19]';
$bd='Alumnos';

$conn = mysqli_connect($server, $user, $password, $bd);
if(!$conn){
    echo 'Parece que fallo tu base de datos';
}else{
    echo 'Todo bien';
}
?>
