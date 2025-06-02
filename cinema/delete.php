<?php
include 'konek.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM bookingTable WHERE bookingID = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: todo.php?status=deleted");
    } else {
        echo "Gagal menghapus booking.";
    }
}
?>
