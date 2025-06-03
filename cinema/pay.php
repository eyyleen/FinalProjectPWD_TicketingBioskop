<?php
$link = mysqli_connect("localhost", "root", "", "cinema");

$result = mysqli_query($link, "
    SELECT p.paymentID, p.bookingID, p.paymentMethod, p.paymentStatus, p.paymentTime,
           b.bookingFName, b.bookingLName, b.movieName 
    FROM paymentTable p 
    JOIN bookingTable b ON p.bookingID = b.bookingID
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Konfirmasi Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            background: linear-gradient(to right, #f7e0ae, #f5c26b);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background-color: #ffffffcc;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            margin-top: 40px;
        }
        h2 {
            color: #5a3e00;
            font-weight: bold;
        }
        .table thead th {
            background-color: #fff7e6;
            color: #5c3d00;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
          .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-admin {
            background-color: #ffc107;
            border: none;
            color: #000;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-admin:hover {
            background-color: #e0a800;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">🔐 Admin - Konfirmasi Pembayaran </h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Film</th>
                    <th>Metode</th>
                    <th>Status</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= htmlspecialchars($row['bookingFName'] . ' ' . $row['bookingLName']) ?></td>
                    <td><?= htmlspecialchars($row['movieName']) ?></td>
                    <td><?= htmlspecialchars($row['paymentMethod']) ?></td>
                    <td>
                        <span class="badge <?= $row['paymentStatus'] === 'Paid' ? 'bg-success' : 'bg-warning text-dark' ?>">
                            <?= htmlspecialchars($row['paymentStatus']) ?>
                        </span>
                    </td>   
                    <td><?= htmlspecialchars($row['paymentTime']) ?></td>
                    <td>
                        <?php if ($row['paymentStatus'] === 'Paid'): ?>
                            <button class="btn btn-sm btn-secondary" disabled>✔ Sudah Dibayar</button>
                        <?php else: ?>
                            <form method="POST" action="paed.php" style="display:inline;">
                                <input type="hidden" name="paymentID" value="<?= $row['paymentID'] ?>">
                                <button type="submit" class="btn btn-sm btn-success">Konfirmasi</button>
                            </form>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
             <a href="admin.php" class="btn-admin">← Kembali ke Halaman Admin</a>

    </div>
</body>
</html>