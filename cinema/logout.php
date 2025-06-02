<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php"); // Ganti dengan halaman login kamu
exit();
?>