<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "cinema";

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "";
}
?>
