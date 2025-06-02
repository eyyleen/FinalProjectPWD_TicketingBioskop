<?php
include "konek.php"; // koneksi database

// Proses jika form submit (approve atau reject)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $paymentID = $_POST['paymentID'];

    if (isset($_POST['approve'])) {
        $status = 'confirmed';
        $approval = 'approved';
    } elseif (isset($_POST['reject'])) {
        $status = 'rejected';
        $approval = 'denied';
    } else {
        die("Invalid action.");
    }

    $query_update = "UPDATE payments SET paymentStatus='$status', adminApproval='$approval' WHERE paymentID='$paymentID'";
    $result_update = mysqli_query($link, $query_update);

    if ($result_update) {
        echo "<p style='color:green;'>Payment ID $paymentID berhasil di-$approval.</p>";
    } else {
        echo "<p style='color:red;'>Update gagal: " . mysqli_error($link) . "</p>";
    }
}

// Ambil data pembayaran yang statusnya pending
$query = "SELECT payments.*, bookingTable.movieName 
          FROM payments 
          JOIN bookingTable ON payments.bookingID = bookingTable.bookingID 
          WHERE payments.paymentStatus = 'pending'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
?>

<h2>Konfirmasi Pembayaran Pending</h2>

<?php if (mysqli_num_rows($result) == 0): ?>
    <p>Tidak ada pembayaran yang perlu dikonfirmasi.</p>
<?php else: ?>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
            <strong>Movie:</strong> <?= htmlspecialchars($row['movieName']) ?><br>
            <strong>Payment Method:</strong> <?= htmlspecialchars($row['paymentMethod']) ?><br>
            <strong>Payment Time:</strong> <?= htmlspecialchars($row['paymentTime']) ?><br>
            <form method="post" style="margin-top:8px;">
                <input type="hidden" name="paymentID" value="<?= $row['paymentID'] ?>">
                <button type="submit" name="approve">Approve</button>
                <button type="submit" name="reject">Reject</button>
            </form>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
