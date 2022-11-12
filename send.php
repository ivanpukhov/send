  <!DOCTYPE html>
  <html lang="en">

  <head>
  	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=, initial-scale=1.0">
  	<title>Document</title>
  	<style>
  		* {
  			margin: 0;
  			padding: 0;
  			box-sizing: border-box;
  		}

  		a {
  			background: green;
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
		?>
  	<?php
		//Если переменная name передана
		if (isset($_POST["name"])) {
			//Вставляем данные, подставляя их в запрос
			$sql = mysqli_query($link, "INSERT INTO `mytable` (`ord`, `name`, `city`, `adres`, `phone`, `indx`) VALUES ('{$_POST['ord']}','{$_POST['name']}', '{$_POST['city']}', '{$_POST['adres']}', '{$_POST['phone']}', '{$_POST['indx']}')");
			//Если вставка прошла успешно
			if ($sql) {
				echo '<a href="/">Успешно добавлено <br> Нажмите, чтобы добавить еще</a>';
			} else {
				echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
			}
		}
		?>

  </body>

  </html>