<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paymentID'])) {
    $link = mysqli_connect("localhost", "root", "", "cinema");
    $paymentID = intval($_POST['paymentID']);

    $query = "
        UPDATE paymentTable 
        SET paymentStatus = 'Paid', paymentTime = NOW() 
        WHERE paymentID = $paymentID
    ";

    if (mysqli_query($link, $query)) {
        header("Location: pay.php?success=1");
    } else {
        echo "❌ Gagal mengupdate status pembayaran.";
    }
} else {
    echo "⛔ Akses tidak valid.";
}
