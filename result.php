<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.order {
			border: 3px solid #000;
			margin-bottom: 10px;
			height: 193px;
		}

		.name,
		.city,
		.adres,
		.phone {
			border-bottom: 3px solid #000;
			height: 20%;
		}

		.indx {
			padding-bottom: 3px;
		}

		.order>div {
			display: flex;
			font-family: 'Segoe UI';
			font-size: 17px;
			word-break: break-all;
			display: flex;
			align-items: center;
			padding-left: 20px;
		}

		.title {
			font-family: 'Segoe UI';
			font-size: 15px;
			font-weight: bold;
			padding-right: 10px;
			min-width: 64px;
		}

		.order__block {
			width: 100%;
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;
			gap: 0px 10px;
			grid-template-areas: ". ."". ."". ."". ."". ."". .";
		}
	</style>
</head>

<body>
	<?php
	$host = 'localhost';  // Хост, у нас все локально
	$user = 'r70776py_bd';    // Имя созданного вами пользователя
	$pass = 'Pia753!!'; // Установленный вами пароль пользователю
	$db_name = 'r70776py_bd';   // Имя базы данных
	$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

	// Ругаемся, если соединение установить не удалось
	if (!$link) {
		echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
		exit;
	}
	echo ("<div class='order__block'>");
	$sql = mysqli_query($link, 'SELECT  `ord`, `Name`, `City`, `adres`,`phone`,`indx` FROM `mytable`');
	while ($result = mysqli_fetch_array($sql)) {
		echo "<div class='order'>
	
    <div class='name'>
        <div class='title'>Кому:</div>{$result['Name']}</div>
    <div class='city'>
        <div class='title'>Город: </div>{$result['City']}</div>
    <div class='adres'>
        <div class='title'>Адрес:</div>{$result['adres']}</div>
    <div class='phone'>
        <div class='title'>Номер телефона:</div>{$result['phone']}</div>
    <div class='indx'>
        <div class='title'>Индекс:</div>{$result['indx']}</div>
</div>";
	}
	echo ("</div>");
	?>
<script>
        window.onafterprint = window.close;
        window.print();
    </script>
</body>

</html>