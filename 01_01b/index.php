<!DOCTYPE html>
<html>

<head>
	<title>Validate Form</title>
	<meta name="author" value="Joe Casabona" />
</head>

<body>
	<main>
		<?php
		if (isset($_POST['submit'])) {
			$num = (int)$_POST['number'];
			if (is_int($num) && $num > 0) {
				echo '<h3>Boa! Você informou um inteiro positivo! </h3>';
			} else {
				echo '<h3>ERRO! Não enviou um inteiro positivo.</h3>';
			}
		}
		?>
		<form name="submit_number" method="POST">
			<div>
				<label for="name">Digite um número inteiro positivo:</label>
				<input type="text" name="number" />
			</div>
			<div><input type="submit" name="submit" value="enviar" /></div>
		</form>
	</main>
</body>

</html>