<?php
	include 'conct.php';
	include 'classPHP/person.php';
if(isset($_POST['saveInfo'])){
	echo 'saving...';
	$DNI=$_POST['DNI'];
	$itName=$_POST['itName'];
	$years=$_POST['years'];
	$curso=$_POST['curso'];
	$day=$_POST['day'];
}
?>
