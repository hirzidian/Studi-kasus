<!DOCTYPE html>
<html>
<head>
	<title>Mengecek segitiga</title>
</head>
<body>
	<center>
	<h2>Masukkan 3 angka untuk mengecek jenis Segitiga:</h2>
	<form method="post" action="<?php ($_SERVER["PHP_SELF"]);?>">
		<label for="A">Sisi 1:</label>
		<input type="number" name="A" placeholder="SISI 1" required>
		<br><br>
		<label for="B">Sisi 2:</label>
		<input type="number" name="B"  placeholder="SISI 2" required>
		<br><br>
		<label for="C">Sisi 3:</label>
		<input type="number" name="C"  placeholder="SISI 3" required>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	</center>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$A = $_POST["A"];
			$B = $_POST["B"];
			$C = $_POST["C"];
				//&& = apakah keduanya benar 
			if ($A + $B > $C && $B + $C > $A && $A + $C > $B) {
				echo "Sisi $A, $B, dan $C Termasuk jenis :.<br>";
					//== : apakah sama
				if ($A == $B && $B == $C) {
					echo "Segitiga Sama Sisi.";
				} else if ($A == $B || $B == $C || $A == $C) {
					echo "Segitiga Sama Kaki.";
				} else {
					echo "Segitiga Sembarang.";
				}
			}
		}
	?>

</body>
</html>
