<?php
include 'konek.php';

if (!isset($_GET['movieID'])) {
    echo "<script>alert('ID film tidak ditemukan'); window.location.href='movat.php';</script>";
    exit;
}

$movieID = intval($_GET['movieID']);
$query = "SELECT * FROM movieTable WHERE movieID = $movieID";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>alert('Film tidak ditemukan'); window.location.href='movat.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <title>Edit Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }
        .form-label {
            font-weight: 500;
        }
        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            width: 100%;
            margin-top: 10px;
        }
        </style>
</head>
<body class="container mt-5">
    <h2>Edit Data Film</h2>
    <form method="POST" action="update_film.php">
        <input type="hidden" name="movieID" value="<?= $data['movieID']; ?>">

        <div class="mb-3">
            <label for="movieTitle" class="form-label">Judul</label>
            <input type="text" class="form-control" name="movieTitle" value="<?= htmlspecialchars($data['movieTitle']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="movieGenre" class="form-label">Genre</label>
            <input type="text" class="form-control" name="movieGenre" value="<?= htmlspecialchars($data['movieGenre']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="movieDuration" class="form-label">Durasi</label>
            <input type="text" class="form-control" name="movieDuration" value="<?= htmlspecialchars($data['movieDuration']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="movieRelDate" class="form-label">Tanggal Rilis</label>
            <input type="date" class="form-control" name="movieRelDate" value="<?= htmlspecialchars($data['movieRelDate']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="movieImg" class="form-label">Link Gambar</label>
            <input type="text" class="form-control" name="movieImg" value="<?= htmlspecialchars($data['movieImg']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Film</button>
        <a href="movad.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
