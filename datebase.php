<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='UTF-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>База клиентов</title>
	<link rel='stylesheet' href='assets/css/mainV1.css'>
</head>

<body>
	<header class='header'>

		<div class='header__block'>
			<a href='index.html'>

				<div class='header__exit'>
					<img src='assets/img/header__exit.svg' alt=''>
				</div>
			</a>

			<div class='header__title'>База клиентов</div>
			<div class='header__cart'>
				<img src='assets/img/header__cart.svg' alt=''>
			</div>
		</div>
	</header>
	<div class='content'>
		<div class='search'>
			<input type='text' placeholder='Найти продукт' id='inputSearch'>
		</div>
		<ul id='list'>
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
			$sql = mysqli_query($link, 'SELECT  `ord`, `Name`, `City`, `adres`,`phone`,`indx` FROM `mytable15` ORDER BY id DESC');

			while ($result = mysqli_fetch_array($sql)) {
				$phone = $result["phone"];
				$City = $result["City"];
				$adres = $result["adres"];
				$indx = $result["indx"];
				$name = $result["Name"];

				echo "
            <li>
                <div class='product'>
                    <div class='product__logo'>
                        <img src='assets/img/product__image.svg' alt=''>
                    </div>
                    <div class='product__content'>
                        <form action='send.php' method='post'>

                            <a>
                                <div class='product__name'><input type='text' value='{$phone}' name='phone' class='product__name' ></div>
                            </a>

                            <a href='' class='product__link'><input type='text' name='name' value='{$name}' class='product__link' ></a>
                            <input class='none' name='city' value='$City}' >
                            </input>
							 <input type='text' >
                            <input class='none' name='adres' value='{$adres}' >
                            </input>
                            <input class='none' name='indx' value='{$indx}' >
                            </input>
                            <input class='submit' type='submit' class='submit'>
                        </form>
                    </div>
                </div>
            </li>
";
			}
			echo ("</div>");
			?>
		</ul>
	</div>
	<script>
		function search() {
			let input = document.getElementById('inputSearch');
			let filter = input.value.toUpperCase();
			let ul = document.getElementById('list');
			let li = ul.getElementsByTagName('li');

			// Перебирайте все элементы списка и скрывайте те, которые не соответствуют поисковому запросу
			for (let i = 0; i < li.length; i++) {
				let a = li[i].getElementsByTagName('a')[0];
				if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
					li[i].style.display = '';
				} else {
					li[i].style.display = 'none';
				}
			}
		}
		document.addEventListener('keyup', search);
	</script>
</body>

</html>