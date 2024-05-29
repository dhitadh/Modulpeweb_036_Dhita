<html>
<head>
    <title>Tampilkan Tanggal dan Waktu</title>
</head>
<body>
    <?php
        $tanggal = date("d M Y, H:i:s");
        $hari_tanggal = date("l, F j, Y g:i a");
        $tanggal_waktu = date("m/d/Y h:i A");

        echo "Tanggal dan Waktu Saat Ini:<br>";
        echo "- $tanggal<br>";
        echo "- $hari_tanggal<br>";
        echo "- $tanggal_waktu<br>";
    ?>
</body>
</html>