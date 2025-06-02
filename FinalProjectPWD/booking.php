<?php
include 'ceklog.php';

if (!isset($_GET['movieID'])) {
    die("Movie ID tidak ditemukan di URL.");
}
$id = intval($_GET['movieID']);

$link = mysqli_connect("localhost", "root", "", "cinema");

$movieQuery = "SELECT * FROM movieTable WHERE movieID = $id";
$movieImageById = mysqli_query($link, $movieQuery);
$row = mysqli_fetch_array($movieImageById);

$hargaTiket = null;
$hargaTable = [
    "2d" => ["main-hall" => 30000, "vip-hall" => 50000, "private-hall" => 70000],
    "3d" => ["main-hall" => 40000, "vip-hall" => 60000, "private-hall" => 80000],
    "imax" => ["main-hall" => 50000, "vip-hall" => 70000, "private-hall" => 90000],
    "7d" => ["main-hall" => 60000, "vip-hall" => 80000, "private-hall" => 100000],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['type'], $_POST['theatre'])) {
    $type = $_POST['type'];
    $theatre = $_POST['theatre'];
    if (isset($hargaTable[$type][$theatre])) {
        $hargaTiket = $hargaTable[$type][$theatre];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book <?= htmlspecialchars($row['movieTitle']) ?> Now</title>
    <link rel="stylesheet" href="style/styles.css">
</head>
<body style="background-color:#6e5a11;">
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section1">
            <h1>RESERVE YOUR TICKET</h1>
        </div>
        <div class="booking-panel-section booking-panel-section2">
            <a href="javascript:history.back()" style="font-size:24px; color:white; text-decoration:none;">&larr; Back</a>
        </div>
        <div class="booking-panel-section booking-panel-section3">
            <div class="movie-box">
                <img src="<?= $row['movieImg'] ?>" alt="">
            </div>
        </div>
        <div class="booking-panel-section booking-panel-section4">
            <div class="title"><?= htmlspecialchars($row['movieTitle']) ?></div>
            <div class="movie-information">
                <table>
                    <tr><td>GENRE</td><td><?= $row['movieGenre'] ?></td></tr>
                    <tr><td>DURATION</td><td><?= $row['movieDuration'] ?></td></tr>
                    <tr><td>RELEASE DATE</td><td><?= $row['movieRelDate'] ?></td></tr>
                    <tr><td>DIRECTOR</td><td><?= $row['movieDirector'] ?></td></tr>
                    <tr><td>ACTORS</td><td><?= $row['movieActors'] ?></td></tr>
                </table>
            </div>
            <div class="booking-form-container">
                <form method="POST">
                    <select name="theatre" required>
                        <option disabled selected>THEATRE</option>
                        <option value="main-hall">Main Hall</option>
                        <option value="vip-hall">VIP Hall</option>
                        <option value="private-hall">Private Hall</option>
                    </select>
                    <select name="type" required>
                        <option disabled selected>TYPE</option>
                        <option value="2d">2D</option>
                        <option value="3d">3D</option>
                        <option value="imax">IMAX</option>
                        <option value="7d">7D</option>
                    </select>
                    <select name="date" required>
                        <option disabled selected>DATE</option>
                        <option value="12-3">March 12, 2019</option>
                        <option value="13-3">March 13, 2019</option>
                        <option value="14-3">March 14, 2019</option>
                        <option value="15-3">March 15, 2019</option>
                        <option value="16-3">March 16, 2019</option>
                    </select>
                    <select name="hour" required>
                        <option disabled selected>TIME</option>
                        <option value="09-00">09:00 AM</option>
                        <option value="12-00">12:00 AM</option>
                        <option value="15-00">03:00 PM</option>
                        <option value="18-00">06:00 PM</option>
                        <option value="21-00">09:00 PM</option>
                        <option value="24-00">12:00 PM</option>
                    </select>
                    <input type="text" name="fName" placeholder="First Name" required>
                    <input type="text" name="lName" placeholder="Last Name">
                    <input type="text" name="pNumber" placeholder="Phone Number" required>
                    <select name="paymentMethod" required>
                        <option disabled selected>PAYMENT METHOD</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="E-Wallet">E-Wallet</option>
                        <option value="Credit Card">Credit Card</option>
                    </select>
                    <p><strong>Total Harga:</strong> <?= $hargaTiket ? 'Rp ' . number_format($hargaTiket, 0, ',', '.') : '-' ?></p>
                    <input type="hidden" name="harga" value="<?= $hargaTiket ?>">
                    <button type="submit" name="submit" class="form-btn">Book a Seat</button>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    $fName = $_POST['fName'];
                    $pNumber = $_POST['pNumber'];

                    if (!preg_match('/^[a-zA-Z0-9\\s]+$/', $fName)) {
                        echo "<p style='color:red;'>Name can only contain letters, numbers, and spaces.</p>";
                    } elseif (!preg_match('/^[0-9]+$/', $pNumber)) {
                        echo "<p style='color:red;'>Phone Number can only contain numbers.</p>";
                    } else {
                        $insert = "INSERT INTO bookingTable (
                            movieName, bookingTheatre, bookingType, bookingDate, bookingTime, 
                            bookingFName, bookingLName, bookingPNumber
                        ) VALUES (
                            '{$row['movieTitle']}',
                            '{$_POST['theatre']}',
                            '{$_POST['type']}',
                            '{$_POST['date']}',
                            '{$_POST['hour']}',
                            '$fName',
                            '{$_POST['lName']}',
                            '$pNumber'
                        )";
                        if (mysqli_query($link, $insert)) {
    $lastId = mysqli_insert_id($link);
    $paymentMethod = $_POST['paymentMethod'];
    mysqli_query($link, "INSERT INTO paymentTable (bookingID, paymentMethod) VALUES ($lastId, '$paymentMethod')");
    
    echo "<script>alert('Booking berhasil! Silakan lanjut ke pembayaran.');</script>";
    echo "<p style='color: #155724; background-color: #d4edda; border: 1px solid #c3e6cb; padding: 15px; border-radius: 8px; font-weight: bold; max-width: 400px;'>";
    echo "Booking berhasil! Silakan lanjut ke ";
    echo "<a href='payment.php?id=$lastId' style='color: #004085; background-color: #cce5ff; padding: 8px 15px; border-radius: 5px; text-decoration: none; font-weight: bold;'>";
    echo "pembayaran";
    echo "</a>.";
    echo "</p>";
} else {
    echo "<p style='color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 15px; border-radius: 8px; max-width: 400px; font-weight: bold;'>";
    echo "Gagal menyimpan data.";
    echo "</p>";
}

                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>