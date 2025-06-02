<?php
include 'konek.php';
session_start();

$keyword = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$sql = "SELECT * FROM movieTable";
if (!empty($keyword)) {
    $sql .= " WHERE movieTitle LIKE '%$keyword%'"; // bisa ditambah genre/director nanti
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
            .admin-section-header {
        color: #FFF;
        background-color: #3a3a3a;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }

    .admin-logo {
        font-size: 24px;
        font-weight: bold;
    }

    .admin-login-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .admin-login-info i, .admin-login-info a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .admin-user-avatar {
        width: 40px;
        border-radius: 50%;
    }
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
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
            transition: transform 0.3s ease;
        }

        .movie-card:hover {
            transform: translateY(-5px);
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
        .btn-action {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    margin-top: 8px;
    border-radius: 6px;
    text-align: center;
    text-decoration: none;
}

.btn-edit {
    background-color: #2980b9;
    color: white;
}

.btn-edit:hover {
    background-color: #1f6391;
}

.btn-delete {
    background-color: #c0392b;
    color: white;
}

.btn-delete:hover {
    background-color: #a93226;
}
.admin-logo {
    text-decoration: none;
    color: white;
    font-size: 24px;
    font-weight: bold;
    padding: 20px 10px;
    display: block;
}


    </style>
    <div class="admin-section-header">
<a href="admin.php" class="admin-logo">SINEMACUYY</a>
    <div class="admin-login-info">
        <i class="far fa-bell"></i>
        <i class="far fa-comment-alt"></i>
        <a href="#">Welcome, <?= htmlspecialchars($_SESSION['email']); ?></a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</div>
</head>
<body>

<h1 style="font-family: ALGERIAN; color: white; font-size:5em;">Daftar Film</h1>

<div class="container mb-4">
    <form method="GET" class="row justify-content-center">
        <div class="col-md-6">
            <input type="text" name="search" class="form-control" placeholder="Cari judul film..." value="<?= htmlspecialchars($keyword); ?>">
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

<a class="btn-action btn-edit" href="editfil.php?movieID=<?= $row['movieID']; ?>">✏️ Edit</a>

<a class="btn-action btn-delete" href="hapfil.php?movieID=<?= $row['movieID']; ?>" onclick="return confirm('Yakin ingin menghapus film ini?')">🗑️ Hapus</a>

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