<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";
$conn = mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if ($conn == false) {
    echo "Koneksi ke server gagal.";
    die();
} 
// else statement untuk menampilkan pesan sukses (opsional)
# else echo "Koneksi berhasil";
?>
