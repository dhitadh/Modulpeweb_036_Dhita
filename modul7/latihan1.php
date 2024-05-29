<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Persegi Panjang</title>
</head>
<body>
    <h1>Kalkulator Luas Persegi Panjang</h1>
    <form method="post" action="">
        Panjang (cm): <input type="number" name="panjang" required><br>
        Lebar (cm): <input type="number" name="lebar" required><br>
        <input type="submit" name="hitung" value="Hitung Luas">
    </form>

    <?php
    if(isset($_POST['hitung'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $luas = $panjang * $lebar;
        echo "Luas persegi panjang dengan panjang $panjang cm dan lebar $lebar cm adalah $luas cm<sup>2</sup>";
    }
    ?>
</body>
</html>
