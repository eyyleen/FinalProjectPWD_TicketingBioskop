<?php
include 'konek.php';
include 'ceklog.php';
$link = mysqli_connect("localhost", "root", "", "cinema");
if (!$link) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$id = $_GET['id'];
$result = mysqli_query($link, "SELECT * FROM paymentTable WHERE bookingID = $id");
$row = mysqli_fetch_array($result);

if (isset($_POST['pay'])) {
    mysqli_query($link, "UPDATE paymentTable SET paymentStatus='Paid' WHERE bookingID = $id");
    echo "<script>alert('Pembayaran berhasil!'); window.location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="style/styles.css">
    <style>
        /* Background gradient with subtle animated circles */
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #5a3f00, #bb8f00);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* Container styling with glassmorphism effect */
        .payment-container {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            max-width: 480px;
            width: 90%;
            padding: 30px 40px;
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            position: relative;
            text-align: center;
            user-select: none;
        }
        /* Animated circles behind container */
        .payment-container::before,
        .payment-container::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
            z-index: -1;
            animation: float 6s ease-in-out infinite alternate;
        }
        .payment-container::before {
            width: 200px;
            height: 200px;
            background: #ffdd00;
            top: -50px;
            left: -50px;
            animation-delay: 0s;
        }
        .payment-container::after {
            width: 150px;
            height: 150px;
            background: #ff9600;
            bottom: -40px;
            right: -30px;
            animation-delay: 3s;
        }
        @keyframes float {
            0% {
                transform: translateY(0) translateX(0);
                opacity: 0.15;
            }
            100% {
                transform: translateY(-20px) translateX(20px);
                opacity: 0.3;
            }
        }

        h2 {
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 2.2rem;
            letter-spacing: 2px;
            text-shadow: 0 0 5px #ffee58;
        }
        p {
            font-size: 1.1rem;
            margin: 12px 0;
            text-shadow: 0 0 3px rgba(0,0,0,0.7);
        }
        /* Stylish bold text for labels */
        strong {
            color: #ffee58;
        }

        /* Custom button style with hover and focus effects */
        button {
            margin-top: 30px;
            padding: 14px 40px;
            font-size: 1.2rem;
            font-weight: 700;
            color: #5a3f00;
            background: linear-gradient(45deg, #ffee58, #ff9600);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 8px 15px rgba(255, 217, 0, 0.4);
            transition: all 0.3s ease;
            letter-spacing: 1.2px;
            user-select: none;
        }
        button:hover {
            background: linear-gradient(45deg, #ffca28, #ffb300);
            box-shadow: 0 10px 20px rgba(255, 181, 0, 0.6);
            transform: translateY(-3px);
        }
        button:focus {
            outline: none;
            box-shadow: 0 0 0 3px #ffcc00;
        }
        /* Link styling */
        a {
            display: inline-block;
            margin-top: 25px;
            font-weight: 700;
            font-size: 1.1rem;
            color: #ffee58;
            text-decoration: none;
            letter-spacing: 1.1px;
            transition: color 0.25s ease;
        }
        a:hover {
            color: #ffb300;
            text-decoration: underline;
        }

        /* Responsive typography */
        @media (max-width: 540px) {
            .payment-container {
                padding: 25px 30px;
            }
            h2 {
                font-size: 1.8rem;
            }
            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Pembayaran Tiket</h2>
        <p><strong>Metode Pembayaran:</strong> <?php echo htmlspecialchars($row['paymentMethod']); ?></p>
        <p><strong>Status:</strong> <?php echo htmlspecialchars($row['paymentStatus']); ?></p>
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<svg
   width="100"
   height="100"
   viewBox="0 0 100 100"
   version="1.1"
   id="qris-logo"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:xlink="http://www.w3.org/1999/xlink">
  <title>QRIS Logo</title>
  <desc>Simple QRIS style QR code icon</desc>
  <rect width="100" height="100" fill="#000"/>
  <!-- Four large squares for corners -->
  <rect x="10" y="10" width="20" height="20" fill="#fff"/>
  <rect x="15" y="15" width="10" height="10" fill="#000"/>
  <rect x="70" y="10" width="20" height="20" fill="#fff"/>
  <rect x="75" y="15" width="10" height="10" fill="#000"/>
  <rect x="10" y="70" width="20" height="20" fill="#fff"/>
  <rect x="15" y="75" width="10" height="10" fill="#000"/>
  <!-- Smaller black squares representing typical QR code pattern -->
  <rect x="40" y="30" width="6" height="6" fill="#000"/>
  <rect x="52" y="38" width="6" height="6" fill="#000"/>
  <rect x="40" y="50" width="6" height="6" fill="#000"/>
  <rect x="64" y="50" width="6" height="6" fill="#000"/>
  <rect x="40" y="62" width="6" height="6" fill="#000"/>
  <rect x="52" y="62" width="6" height="6" fill="#000"/>
  <rect x="64" y="62" width="6" height="6" fill="#000"/>
  <rect x="70" y="70" width="6" height="6" fill="#000"/>
</svg>

        <?php if ($row['paymentStatus'] == 'Pending'): ?>
            <form method="post" autocomplete="off">
                <button type="submit" name="pay">Konfirmasi Pembayaran</button>
            </form>
        <?php else: ?>
            <p><strong>Terima kasih! Pembayaran Anda sudah diterima.</strong></p>
            <a href="index.php">Kembali ke Beranda</a>
        <?php endif; ?>
    </div>
</body>
</html>

