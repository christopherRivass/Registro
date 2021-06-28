<?php
	include('conct.php');
	include('classPHP/person.php');
if(isset($_POST['saveInfo'])){
	echo 'saving...';
	$DNI=$_POST['DNI'];
	$itName=$_POST['itName'];
	$years=$_POST['years'];
	$curso=$_POST['curso'];
	$day=$_POST['day'];
	$input="INSERT INTO datAlumnos(DNI,Nombre,Edad,Curso,Jornada) VALUES('$DNI','$itName','$years','$curso','$day')";
	$resul = mysqli_query($conn,$input);
	if (!$resul){
		echo 'no se logro insertar los elementos '. mysqli_error($conn);
	}else{
		echo 'done!';
	}
}
?>
