<?php
include 'konek.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM bookingTable WHERE bookingID=$id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['bookingFName'];
    $lname = $_POST['bookingLName'];
    $pnumber = $_POST['bookingPNumber'];
    $theatre = $_POST['bookingTheatre'];
    $date = $_POST['bookingDate'];
    $time = $_POST['bookingTime'];

    $update = "UPDATE bookingTable SET 
                bookingFName='$fname', 
                bookingLName='$lname', 
                bookingPNumber='$pnumber', 
                bookingTheatre='$theatre',
                bookingDate='$date',
                bookingTime='$time'
               WHERE bookingID=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: todo.php?status=updated");
    } else {
        echo "Gagal mengupdate booking.";
    }
}
?>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #1e2a38; /* abu kebiruan */
        padding: 40px;
        color: #f0f0f0;
        background-image: linear-gradient(to right, #1e2a38, #283747); /* gradasi */
    }

    form {
        max-width: 500px;
        margin: auto;
        background: #2c3e50; /* dark blue-gray */
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    }

    label {
        font-weight: 600;
        margin-bottom: 5px;
        display: block;
        color: #ecf0f1;
    }

    input[type="text"],
    input[type="date"],
    input[type="time"] {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 15px;
        border: 1px solid #34495e;
        border-radius: 8px;
        box-sizing: border-box;
        background-color: #34495e;
        color: #ecf0f1;
        transition: border 0.3s ease, background-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="time"]:focus {
        border-color: #3498db;
        background-color: #3c5c74;
        outline: none;
    }

    button {
        background-color: #3498db;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    button:hover {
        background-color: #2980b9;
    }
</style>

<form method="POST">
    <label>Nama Depan:</label><br>
    <input type="text" name="bookingFName" value="<?= htmlspecialchars($data['bookingFName']) ?>"><br>
    <label>Nama Belakang:</label><br>
    <input type="text" name="bookingLName" value="<?= htmlspecialchars($data['bookingLName']) ?>"><br>
    <label>No HP:</label><br>
    <input type="text" name="bookingPNumber" value="<?= htmlspecialchars($data['bookingPNumber']) ?>"><br>
    <label>Teater:</label><br>
    <input type="text" name="bookingTheatre" value="<?= htmlspecialchars($data['bookingTheatre']) ?>"><br>
    <label>Tanggal:</label><br>
    <input type="date" name="bookingDate" value="<?= htmlspecialchars($data['bookingDate']) ?>"><br>
    <label>Waktu:</label><br>
    <input type="time" name="bookingTime" value="<?= htmlspecialchars($data['bookingTime']) ?>"><br><br>
    <button type="submit">Simpan Perubahan</button>
</form>
