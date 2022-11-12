<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		a {
			background: #dd0683;
			color: white;
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100vw;
			height: 100vh;
			font-family: serif;
			text-transform: uppercase;
			text-decoration: none;
			font-size: 200%;
			text-align: center;
		}
	</style>
</head>

<body>
	<?php
	$servername = "localhost";
	$username = "r70776py_bd";
	$password = "Pia753!!";
	$dbname = "r70776py_bd";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
$sql = "DELETE FROM mytable";
	// sql to delete a record

	$sqlp = mysqli_query($conn, 'INSERT INTO `mytable15` (`ord`, `name`, `city`, `adres`, `phone`, `indx`) SELECT `ord`, `name`, `city`, `adres`, `phone`, `indx` FROM `mytable`');

	if ($conn->query($sql) === TRUE) {
		echo '<a href="/">Данные сбросились <br> Нажмите, чтобы добавить новую</a>';
	} else {
		echo "Error deleting record: " . $conn->error;
	}



	$conn->close();
	?>


</body>

</html>