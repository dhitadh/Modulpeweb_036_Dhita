<?php
include "koneksi.php";

$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];
$sql = "INSERT INTO kontak (nama, jkel, email, alamat, kota, pesan) VALUES ('$vnama', '$vjkel', '$vemail', '$valamat', '$vkota', '$vpesan')";
if (mysqli_query($koneksi, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
  
  mysqli_close($koneksi);
header("location:cetak.php");
?>