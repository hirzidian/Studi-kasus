
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level1-A</title>
</head>
<body>
        <a href="B.php">Level Selanjutnya</a>
    <center>
    <form action="" method="POST">
        <h2>Masukan Nilai</h2>
        <table>
            <label>Angka 1 : </label>
            <input type="number" name ="A" placeholder="Masukan angka">
            <br><br>
            <label>Angka 1 : </label>
            <input type="number" name ="B" placeholder="Masukan angka">
            <br><br>
            <input type="submit" name="submit" value="submit">
        </table>
    </form>
    </center>

    <?php  
    if (isset($_POST["submit"])){
        $A = $_POST['A'];
        $B = $_POST['B'];
            if ($A > $B){
                echo "<center><h2>$A lebih besar dari pada $B</h2></center>";
            }else 
                echo "<center><h2>$A lebih kecil dari pada $B</h2></center>";
        }
    
?>

</body>
</html>