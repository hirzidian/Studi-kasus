<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1 C</title>
</head>
<body>
    <center>
        <h2>Masukan Angka</h2>
    <form action="" method="post">
        <label>Angka 1 : </label>
        <input type="number" name ="A" placeholder="Angka A">
        <br><br>
        <label>Angka 2 : </label>
        <input type="number" name ="B" placeholder="Angka B">
        <br><br>
        <label>Angka 3 : </label>
        <input type="number" name ="C" placeholder="Angka C">
        <br><br>
        <label>Angka 4 : </label>
        <input type="number" name ="D" placeholder="Angka D">
        <br><br>
            <input type="submit" name="submit" value="submit">
    </form>
    </center>

<?php  
$A;
$B;
$C;
$D;

        if(isset($_POST["submit"])) {
            $A = $_POST["A"];
            $B = $_POST["B"];
            $C = $_POST["C"];
            $D = $_POST["D"];
                // echo (max($A, $B, $C, $D));
        

    $max = $A;
    if ($B > $max) {
        $max = $B;
    }
    if ($C > $max) {
        $max = $C;
    }
    if ($D > $max) {
        $max = $D;
    }

    echo "Bilangan Terbesar adalah: " . $max;
}
?>
</body>
</html>