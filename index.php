<html>
	<head>
		<meta charset="UTF-8">
		<title>By Chris Registration</title>
		<link rel="StyleSheet" href="style.css" type="text/css" media="screen">
	</head>

	<body>
		<div>
			<form  name="saveInfo" action="save/saveInfo.php" method="POST">
				<h4>Put your DNI</h4>
				<input type="text" name="DNI" placeholder="0000-1996-1548">
				<h4>Tell me your name</h4>
				<input type="text" name="itName" placeholder="Francisco Albin Rios Hernandez">
				<h4>How old are you</h4>
				<input type="number" name="years" placeholder="7 year's old">
				<h4>What's your grade calssroom</h4>
				<select name="curso" size="1">
					<option>BCH</option>
					<option>BTPCF</option>
					<option>BTPI</option>
					<option>BTPR</option>
				</select>
				<h4> Your calss day</h4>
				<input type="text" name="day" placeholder="morning">
				<input type="submit" name="saveInfo"></input>
			</form>
		</div>
	</body>
</html>
