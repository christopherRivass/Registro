<html>
	<head>
		<meta charset="UTF-8">
		<title>By Chris Registration</title>
		<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
	</head>

	<body>
		<div>
			<form action="save/saveInfo.php" method="POST">
				<h4>Put your DNI</h4>
				<input type="text" name="DNI" class="DNI" placeholder="000012122343">
				<h4>Tell me your name</h4>
				<input type="text" name="itName" class="itName" placeholder="Francisco Rodriguex">
				<h4>How old are you</h4>
				<input type="number" name="years" class="years" placeholder="18">
				<h4>What's your grade calssroom</h4>
				<select name="curso" class="selectHTML" size="1">
					<option>BCH</option>
					<option>BTPCF</option>
					<option>BTPI</option>
					<option>BTPR</option>
				</select>
				<h4> Your calss day</h4>
				<input type="text" name="day" class="day" placeholder="Mornin,Night">
				<input type="submit" name="saveInfo"></input>
			</form>
		</div>
	</body>
</html>
