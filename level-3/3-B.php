<!DOCTYPE html>
<html>
<head>
	<title>Bilangan Terbesar Dan Sedang</title>
</head>
<body>
	<a href="C.php">Level selanjutnya</a>
		<center>
	<h2>Masukan 3 Angka :</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="A">Angka 1:</label>
		<input type="number" name="A" placeholder="Anka 1"required>
		<br><br>
		<label for="B">Angka 2:</label>
		<input type="number" name="B" placeholder="Angka 2" required>
		<br><br>
		<label for="C">Angka 3:</label>
		<input type="number" name="C" placeholder="Angka 3"required>
		<br><br>
		<input type="submit" name="submit" value="Submit">
		</center>
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$A = $_POST["A"];
			$B = $_POST["B"];
			$C = $_POST["C"];

			// Tentukan bilangan terbesar
			$max = $A;
			if ($B > $max) {
				$max = $B;
			}
			if ($C > $max) {
				$max = $C;
			}
			echo "Angka Terbessar : " . $max . "<br><br>";

			// tentukan nilai tenggah
			$tenggah = $A;
			if (($B > $A && $B < $C) || ($B < $A && $B > $C)) {
				$tenggah = $B;
			}
			if (($C > $A && $C < $B) || ($C < $A && $C > $B)) {
				$tenggah = $C;
			}
			echo "Angka Tenggah : " . $tenggah;
		}

		$query = "INSERT INTO user VALUES ('', '$username', '$password')
		";
		mysqli_query($conn, $query)
	?>

</body>
</html>



