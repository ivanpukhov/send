<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Отправить заяку</title>
	<style>
		* {
			padding: 0;
			margin: 0;
			border: 0;
		}

		*,
		*:before,
		*:after {
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		:focus,
		:active {
			outline: none;
		}

		a:focus,
		a:active {
			outline: none;
		}

		nav,
		footer,
		header,
		aside {
			display: block;
		}

		.yes {
			position: absolute;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100vh;
			background-color: #15e7a1;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: Segoe UI;
			font-size: 24px;
		}

		html,
		body {
			height: 100%;
			width: 100%;
			font-size: 100%;
			line-height: 1;
			font-size: 14px;
			-ms-text-size-adjust: 100%;
			-moz-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}

		input,
		button,
		textarea {
			font-family: inherit;
		}

		input::-ms-clear {
			display: none;
		}

		button {
			cursor: pointer;
		}

		button::-moz-focus-inner {
			padding: 0;
			border: 0;
		}

		a,
		a:visited {
			text-decoration: none;
		}

		a:hover {
			text-decoration: none;
		}

		ul li {
			list-style-type: none;
		}

		img {
			vertical-align: top;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-size: inherit;
			font-weight: 400;
		}

		header {
			width: 100%;
			height: 25%;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}

		header img {
			width: 75%;
			margin-left: -30px;
		}

		form {
			margin-top: 100px;
			width: 100%;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
		}

		input {
			display: block;
			width: 261px;
			height: 56px;
			border: 1px solid #D3D3D3;
			border-radius: 20px;
			margin-bottom: 10px;
		}

		input::-webkit-input-placeholder {
			text-align: center;
			font-family: 'Segoe UI';
			font-style: normal;
			font-weight: 400;
			font-size: 14px;
			line-height: 16px;
			/* identical to box height */
			/* Black */
			color: #243656;

		}

		input:-ms-input-placeholder {
			text-align: center;
			font-family: 'Segoe UI';
			font-style: normal;
			font-weight: 400;
			font-size: 14px;
			line-height: 16px;
			/* identical to box height */
			/* Black */
			color: #243656;

		}

		input::-ms-input-placeholder {
			text-align: center;
			font-family: 'Segoe UI';
			font-style: normal;
			font-weight: 400;
			font-size: 14px;
			line-height: 16px;
			/* identical to box height */
			/* Black */
			color: #243656;

		}

		input::placeholder,
		input {
			text-align: center;
			font-family: 'Segoe UI';
			font-style: normal;
			font-weight: 400;
			font-size: 14px;
			line-height: 16px;
			/* identical to box height */
			/* Black */
			color: #243656;

		}

		input.submit {
			background: linear-gradient(289.82deg, #21C8F6 -1.54%, #637BFF 70.15%);
			-webkit-box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);
			box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);
			height: 57px;
			position: relative;
			top: 20px;
			font-family: 'Segoe UI';
			font-style: normal;
			font-weight: 400;
			font-size: 18px;
			color: white;
			border: none;
		}

		.links {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			margin-top: 100px;
		}

		a {
			width: 90%;
			display: flex;
			justify-content: center;
			align-items: center;
			background: linear-gradient(289.82deg, #21C8F6 -1.54%, #637BFF 70.15%);
			-webkit-box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);
			box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);
			height: 57px;

			font-family: 'Segoe UI';
			font-style: normal;
			font-weight: 400;
			font-size: 18px;
			color: white;
			border: none;
			border-radius: 30px;
		}

		b {
			display: block;
			font-family: Segoe UI;
			color: red;

		}
	</style>
</head>

<body>



	<form action="send.php" method="post">
		<input type="text" name="name" placeholder="Фамилия Имя Отчество">
		<input type="text" name="city" placeholder="Ваш город">
		<input type="text" name="adres" placeholder="Ваш адрес">
		<input type="text" name="phone" placeholder="Ваш номер телефона">
		<input type="text" name="indx" placeholder="Почтовый индекс" size="6">
		<input class="submit" type="submit" value="Отправить заявку">
	</form>
	<div class="hur"></div>
	
</body>

</html>