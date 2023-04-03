<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level1-B</title>
</head>
<body>
    <a href="C.php">Level Selanjutnya</a>
        <center>
            <h2>Masukan angka</h2>
    <form action="" method="POST">
    <label>Angka 1 : </label>
    <input type="number" name="A" placeholder="Masukan 1">
    <br><br>
    <label>Angka 2 : </label>
    <input type="number" name="B" placeholder="Masukan 2">
    <br><br>
    <label>Angka 3 : </label>
    <input type="number" name="C" placeholder="Masukan 3">
    <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    </center>

<?php
$A;
$B;
$C;
        if(isset($_POST["submit"])) {
            $A = $_POST["A"];
            $B = $_POST["B"];
            $C = $_POST["C"];
                // echo (max($A, $B, $C));
                $max = $A;
                if ($B > $max) {
                    $max = $B;
                }
                if ($C > $max) {
                    $max = $C;
                }
                
                
                echo "Bilangan terbesar adalah: " . $max;
        }
                
?>
</body>
</html>