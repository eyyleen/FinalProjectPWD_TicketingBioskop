<?php
$method = $_POST['payment_method'] ?? null;
$name = $_POST['name'] ?? 'Pengguna';
$movie = $_POST['movie'] ?? 'Film Tidak Dikenal';
$seat = $_POST['seat'] ?? '-';
$price = $_POST['price'] ?? '-';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Konfirmasi Pembayaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #1e1e2f, #2d2d44);
      color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container {
      background-color: rgba(255, 255, 255, 0.05);
      padding: 30px;
      margin-top: 60px;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(0,0,0,0.4);
    }
    h2 {
      color: #ffc107;
      border-bottom: 2px solid #ffc107;
      padding-bottom: 10px;
      margin-bottom: 25px;
    }
    .card {
      background-color: #3a3a4d !important;
      border: none;
    }
    .btn-success {
      background-color: #28a745;
      border: none;
      font-weight: bold;
    }
    .btn-outline-light {
      border-color: #ffc107;
      color: #ffc107;
    }
    .btn-outline-light:hover {
      background-color: #ffc107;
      color: #000;
    }
    .alert-info {
      background-color: #0dcaf0;
      color: #000;
      border-left: 5px solid #0a58ca;
      font-size: 15px;
    }
    .qr-image {
      border: 3px solid #ffc107;
      border-radius: 10px;
      padding: 5px;
      background-color: #fff;
    }
    .back-link {
      margin-top: 50px;
    }
    p{
      font-size: 18px;
      line-height: 1.6;
      color: white;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>🧾 Detail Pembayaran</h2>

  <div class="mb-4">
    <p><strong>Nama:</strong> <?= htmlspecialchars($name) ?></p>
    <p><strong>Film:</strong> <?= htmlspecialchars($movie) ?></p>
    <p><strong>Kursi:</strong> <?= htmlspecialchars($seat) ?></p>
    <p><strong>Total Bayar:</strong> <span class="text-warning">Rp <?= htmlspecialchars($price) ?></span></p>
  </div>

  <?php if (!$method): ?>
    <div class="alert alert-warning">⚠️ Metode pembayaran tidak tersedia. Silakan kembali dan pilih salah satu.</div>
    <a href="movie.php" class="btn btn-secondary">🔙 Kembali</a>
  <?php else: ?>
    <div class="card p-4 mb-4">
<?php if (strtolower($method) === 'bank transfer'): ?>
        <h4 class="text-warning">Transfer Bank</h4>
        <p>Silakan transfer ke rekening berikut:</p>
        <p><strong>Bank BCA</strong><br>No. Rekening: <strong>1234567890</strong><br>Atas Nama: <strong>PT. Bioskop Jaya</strong></p>

      <?php elseif (strtolower($method) === 'ewallet'): ?>
        <h4 class="text-warning">Pembayaran E-Wallet</h4>
        <p>Silakan scan QR berikut untuk melakukan pembayaran:</p>
        <img src="qris.jpg" alt="QR E-Wallet" width="200" class="mb-2 qr-image">
        <p>Akun: <strong>PT. Bioskop Jaya</strong></p>

      <?php elseif (strtolower($method) === 'cod'): ?>
        <h4 class="text-warning">Pembayaran Credit Card</h4>
        <p>Pembayaran akan diproses menggunakan kartu kredit di kasir bioskop saat Anda mengambil tiket.</p>
        <p>Pastikan membawa kartu kredit dan kartu identitas saat penukaran tiket.</p>

      <?php else: ?>
        <p class="text-warning">Metode tidak dikenali.</p>
      <?php endif; ?>
    </div>

    <div class="alert alert-info mt-3">
      ✅ <strong>Booking Anda sedang diproses.</strong><br>
      Jika ada pertanyaan atau konfirmasi pembayaran, silakan hubungi admin melalui WhatsApp di bawah ini.
    </div>

<?php
$waNumber = "6282163336443";
$waMessage = urlencode("Halo Admin,\nSaya ingin konfirmasi pembayaran.\n\nNama: $name\nFilm: $movie\nKursi: $seat\nTotal Bayar: Rp $price\nMetode: $method");
$waLink = "https://wa.me/$waNumber?text=$waMessage";
?>
    <a href="<?= $waLink ?>" class="btn btn-success mt-2" target="_blank">
      ✅ Hubungi Admin via WhatsApp
    </a>

    <div class="back-link">
      <a href="movie.php" class="btn btn-outline-light">🎬 Kembali ke Halaman Film</a>
    </div>
  <?php endif; ?>
</div>

</body>
</html>
