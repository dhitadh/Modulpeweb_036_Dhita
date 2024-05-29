<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata</h1>
    <?php
        // Variabel biodata
        $nama = "Dhita Dwinandra Herniawan";
        $umur = 20;
        $alamat = "Jl. Gudang Jero 3";
        $pekerjaan = "Mahasiswa";
        $hobi = array("Menggambar", "Traveling", "Mendengarkan Musik");

        // Menampilkan biodata
        echo "<h2>Identitas Diri</h2>";
        echo "Nama: " . $nama . "<br>";
        echo "Umur: " . $umur . " tahun<br>";
        echo "Alamat: " . $alamat . "<br>";
        echo "Pekerjaan: " . $pekerjaan . "<br>";

        echo "<h2>Hobi</h2>";
        echo "- " . $hobi[0] . "<br>";
        echo "- " . $hobi[1] . "<br>";
        echo "- " . $hobi[2] . "<br>";
    ?>
</body>
</html>