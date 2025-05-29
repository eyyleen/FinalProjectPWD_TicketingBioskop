<?php
include 'ceklog.php';
// Cek apakah sudah login dan role-nya user
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'user') {
    header("Location: loginsz.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>Selamat Datang, User!</h1>
    <p>Anda login sebagai: <?php echo $_SESSION['email']; ?></p>
    <p>Ini adalah halaman untuk pengguna biasa.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
