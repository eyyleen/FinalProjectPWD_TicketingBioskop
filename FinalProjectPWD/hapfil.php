<?php
include 'konek.php';

if (isset($_GET['movieID'])) {
    $movieID = intval($_GET['movieID']);

    $query = "DELETE FROM movieTable WHERE movieID = $movieID";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Film berhasil dihapus'); window.location.href='movad.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus film'); window.location.href='movad.php';</script>";
    }
} else {
    echo "<script>alert('ID film tidak ditemukan'); window.location.href='movad.php';</script>";
}
?>
