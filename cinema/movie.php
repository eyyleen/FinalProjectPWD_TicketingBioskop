<?php
include 'konek.php';
include 'ceklog.php';
$keyword = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$sql = "SELECT * FROM movieTable";
if (!empty($keyword)) {
    $sql .= " WHERE movieTitle LIKE '%$keyword%' OR movieGenre LIKE '%$keyword%'";
}


$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>

<html>
<head>
    <title>Daftar Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            margin: 0;
        }
        .navbar {
  padding-top:0rem;
  padding-bottom: 0rem;
  margin-left: 0rem;
  margin-right: 0rem;
}
.navbar-brand {
  font-size: 4rem;
  margin-left: 0.5rem;
}
.navbar img {
  height: 150px; /* tinggi logo */
  width: 200px; /* lebar logo */
}

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .movie-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .movie-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 0.7s ease;
        }

        .movie-card:hover {
            transform: translateY(-20px);
        }

        .movie-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .movie-info {
            padding: 15px;
            flex: 1;
        }

        .movie-info h2 {
            font-size: 18px;
            margin: 0 0 10px;
            color: #34495e;
        }

        .movie-info p {
            font-size: 14px;
            margin: 4px 0;
            color: #7f8c8d;
        }

        .btn-book {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #27ae60;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            text-align: center;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn-book:hover {
            background-color: #219150;
        }
        body{
            background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
        }
        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm ">
    
  <div class="container">
    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="a.png" alt="Logo" width="90" height="90" class="me-2">
      <strong>SINEMACUUYY</strong>
    </a>

    <!-- TOGGLER (for mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- NAV LINKS -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li style="font-family: Algerian; font-size:20px; margin:20px;" class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li style="font-family: Algerian; font-size:20px; margin:20px;" class="nav-item"><a class="nav-link active" href="schedule.php">Schedule</a></li>
        <li style="font-family: Algerian; font-size:20px; margin:20px;" class="nav-item"><a class="nav-link active" href="contact-us.php">Contact</a></li>
      </ul>
    </div>
  </div>
  
</nav>

<h1 style="font-family: ALGERIAN; color: black; font-size:7em;">Daftar Film</h1>

<div class="container mb-4">
    <form method="GET" class="row justify-content-center">
        <div class="col-md-6">
<input type="text" name="search" class="form-control" placeholder="Cari judul atau genre film..." value="<?= htmlspecialchars($keyword); ?>">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>
</div>

<div class="container">
    <div class="movie-grid">
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="movie-card">
                <img src="<?= $row['movieImg']; ?>" alt="Poster">
                <div class="movie-info">
                    <h2><?= $row['movieTitle']; ?></h2>
                    <p><strong>Genre:</strong> <?= $row['movieGenre']; ?></p>
                    <p><strong>Durasi:</strong> <?= $row['movieDuration']; ?></p>
                    <p><strong>Rilis:</strong> <?= $row['movieRelDate']; ?></p>
                    <a class="btn-book" href="booking.php?movieID=<?= $row['movieID']; ?>">Pesan Sekarang</a>
                </div>
            </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-center text-muted">Film tidak ditemukan.</p>
            </div>
        <?php endif; ?>
        
    </div>
</div>

</body>
</html>