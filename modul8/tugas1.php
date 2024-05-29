<?php
// Cek apakah form login telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form login
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Cek apakah data nama dan email sudah diisi
    if (empty($nama) || empty($email)) {
        // Jika data tidak lengkap, redirect ke halaman error
        header("Location: tugas2.php");
        exit();
    }

    // Dapatkan tanggal dan waktu saat ini
    $tanggal = date("Y-m-d");
    $waktu = date("H:i:s");
    $hari = date("l");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        Nama: <input type="text" name="nama"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" name="submit" value="Login">
    </form>

    <?php
    // Jika form login telah dikirim dan data lengkap
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($nama) && !empty($email)) {
        echo "Selamat datang, " . $nama . "!<br>";
        echo "Email: " . $email . "<br>";
        echo "Tanggal login: " . $tanggal . "<br>";
        echo "Waktu login: " . $waktu . "<br>";
        echo "Hari login: " . $hari . "<br>";
    }
    ?>
</body>
</html>