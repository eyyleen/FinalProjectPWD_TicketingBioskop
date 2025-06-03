<?php
include 'konek.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $movieID = intval($_POST['movieID']);
    $movieTitle = mysqli_real_escape_string($conn, $_POST['movieTitle']);
    $movieGenre = mysqli_real_escape_string($conn, $_POST['movieGenre']);
    $movieDuration = mysqli_real_escape_string($conn, $_POST['movieDuration']);
    $movieRelDate = mysqli_real_escape_string($conn, $_POST['movieRelDate']);
    $movieImg = mysqli_real_escape_string($conn, $_POST['movieImg']);

    // Update data ke database
    $query = "UPDATE movieTable SET 
                movieTitle = '$movieTitle',
                movieGenre = '$movieGenre',
                movieDuration = '$movieDuration',
                movieRelDate = '$movieRelDate',
                movieImg = '$movieImg'
              WHERE movieID = $movieID";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data film berhasil diperbarui'); window.location.href='movad.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data film'); window.location.href='movad.php';</script>";
    }
} else {
    echo "<script>alert('Permintaan tidak valid'); window.location.href='movad.php';</script>";
}
?>
