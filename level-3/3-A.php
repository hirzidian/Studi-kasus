<!DOCTYPE html>
<html>
<head>
<title>Angka terbesar dan urutannya</title>
	
</head>
<body>
	<a href="B.php">Level selanjutnya</a>
		<center>
	<h2>Masukan 3 angka :</h2>
	<form method="POST" action="<?php ($_SERVER["PHP_SELF"]);?>">
		<label for="A">Angka 1:</label>
		<input type="number" name="A" required>
		<br><br>
		<label for="B">Angka 2:</label>
		<input type="number" name="B" required>
		<br><br>
		<label for="C">Angka 3:</label>
		<input type="number" name="C" required>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	</center>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$A = $_POST["A"];
			$B = $_POST["B"];
			$C = $_POST["C"];

			// Angka terbesar
			$max = $A;
			if ($B > $max) {
				$max = $B;
			}
			if ($C > $max) {
				$max = $C;
			}
			echo "Angka Terbesar : " . $max . "<br><br>";

			// Urutan angka
			$angka = array($A, $B, $C);
				//sort= Mengurutkan Angka
			sort($angka);
				//implode = mengubah suatu array menjadi sebuah text atau kalimat 
			echo "Urutan angka : " . implode(", ", $angka);
		}
	?>

</body>
</html>
