<?php
require('../conct.php');
if(isset($_POST['saveInfo'])){
	echo 'saving...';
	$DNI=$_POST["DNI"];
	$itName=$_POST["itName"];
	$years=intval($_POST["years"]);
	$curso=$_POST["curso"];
	$day=$_POST["day"];

	$resul = mysqli_query($conn, "INSERT INTO datAlumnos VALUES('$DNI','$itName','$years','$curso','$day')");

	if($resul == true){
		echo ' every done';
	}else{
		echo 'fale';
		echo mysqli_error($conn);
	}
}
?>
