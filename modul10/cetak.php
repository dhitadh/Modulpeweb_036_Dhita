<?php
include "koneksi.php";

$sql = "SELECT * FROM kontak ORDER BY nama;";
$qry = mysqli_query($koneksi, $sql) or die("Proses cetak gagal: " . mysqli_error($koneksi));

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Data Kontak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 75%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Data Kontak</h2>
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pesan</th>
    </tr>";

$no = 1;
while ($hasil = mysqli_fetch_assoc($qry)) {
    echo "<tr>
        <td>$no</td>
        <td>{$hasil['nama']}</td>
        <td>{$hasil['email']}</td>
        <td>{$hasil['alamat']}</td>
        <td>{$hasil['kota']}</td>
        <td>{$hasil['pesan']}</td>
    </tr>";
    $no++;
}

echo "</table>
<a href='kontak.html'>Tambah Data</a>
</body>
</html>";

mysqli_close($koneksi);
?>
