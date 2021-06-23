<?php
echo 'hola';
$user='chris';
$contra='Tsukujomy[19]';
$servidor='localhost';
$baseDedatos='Alumnos';

$conn=mysqli_connect($servidor,$user,$contra);
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
}else{
    echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
}

