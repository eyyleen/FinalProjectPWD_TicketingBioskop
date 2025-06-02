<?php
// Connect to DB
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cinema';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT movieName, COUNT(*) AS tickets_sold FROM bookingtable GROUP BY movieName ORDER BY tickets_sold DESC";
$result = $conn->query($sql);

$data = [];
$max = 0;

while ($row = $result->fetch_assoc()) {
  $movie = trim($row['movieName']);
  $count = (int)$row['tickets_sold'];
  $data[$movie] = $count;
  if ($count > $max) $max = $count;
  $totalTiket = array_sum($data);
$filmTerlaris = array_keys($data)[0];

}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Statistik Penjualan Tiket</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background: #0f0f1b;
      color: #ecf0f1;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 2rem;
      text-align: center;
    }

    h2 {
      color: #00ffcc;
      margin-bottom: 1.5rem;
      text-shadow: 0 0 10px #00ffcc;
    }

    .chart-container {
      display: flex;
      align-items: flex-end;
      justify-content: center;
      gap: 1.5rem;
      max-width: 95%;
      margin: 0 auto 2rem auto;
      padding: 2rem;
      background: #1e1e2f;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 255, 204, 0.2);
      overflow-x: auto;
    }

    .bar {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100px;
      position: relative;
    }

    .bar-value {
      width: 100%;
      background: linear-gradient(135deg, #00ffd5, #0066ff);
      border-radius: 10px 10px 0 0;
      height: 50px;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.5);
      position: relative;
      transition: 0.3s;
    }

    .bar:hover .bar-value::after {
      content: attr(data-count) ' tiket';
      position: absolute;
      top: -28px;
      background: #00ffd5;
      color: #000;
      padding: 5px 8px;
      border-radius: 6px;
      font-size: 12px;
      white-space: nowrap;
      box-shadow: 0 0 10px #00ffd5;
    }

    .bar-label {
      margin-top: 0.5rem;
      font-size: 12px;
      color: #b2bec3;
      max-width: 80px;
      word-break: break-word;
    }

    .footer-note {
      font-size: 0.85rem;
      color: #888;
    }

    @media screen and (max-width: 600px) {
      .bar {
        width: 40px;
      }

      .bar-label {
        font-size: 10px;
      }
    }
    .bar-count {
  font-size: 12px;
  color: #00ffd5;
  margin-bottom: 5px;
  text-shadow: 0 0 5px #00ffd5;
}

.kesimpulan {
  background: #1e1e2f;
  color: #ecf0f1;
  padding: 1.5rem;
  border-radius: 10px;
  max-width: 700px;
  margin: 0 auto;
  box-shadow: 0 0 15px rgba(0,255,204,0.2);
}

.kesimpulan h3 {
  color: #00ffd5;
  margin-bottom: 0.8rem;
  text-shadow: 0 0 8px #00ffd5;
}

.kesimpulan p {
  font-size: 16px;
  line-height: 1.6;
}
/* Hiasan sudut atas */
.corner-decoration {
  position: absolute;
  top: 10px;
  left: 10px;
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #00ffd5, #0066ff);
  border-radius: 50%;
  box-shadow: 0 0 15px rgba(0,255,255,0.5);
  animation: pulse 2s infinite;
}

/* Hiasan sudut bawah */
.corner-decoration-bottom {
  position: absolute;
  bottom: 10px;
  right: 10px;
  width: 30px;
  height: 30px;
  border: 2px solid #00ffd5;
  border-radius: 50%;
  box-shadow: 0 0 10px #00ffd5;
  animation: rotate 4s linear infinite;
}

/* Partikel neon kecil */
.particle {
  position: absolute;
  width: 6px;
  height: 6px;
  background: #00ffc3;
  border-radius: 50%;
  box-shadow: 0 0 8px #00ffc3;
  animation: float 3s infinite ease-in-out;
}

/* Animasi */
@keyframes pulse {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.3); opacity: 0.6; }
}

@keyframes rotate {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
.back-button {
  display: inline-block;
  padding: 10px 20px;
  background: linear-gradient(135deg, #00ffd5, #0066ff);
  color: #fff;
  text-decoration: none;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 255, 213, 0.6);
  font-weight: bold;
  transition: all 0.3s ease;
}

.back-button:hover {
  background: linear-gradient(135deg, #0066ff, #00ffd5);
  box-shadow: 0 0 20px rgba(0, 255, 213, 0.9);
  transform: translateY(-2px);
}



  </style>
</head>
<body>

  <h2 style="font-family: arial; font-size:30px;">📊 Penjualan Tiket Film</h2>
 

  <div class="chart-container">
    <?php foreach ($data as $movie => $count):
      $height = ($count / $max) * 200;
    ?>
      <div class="bar">
        <div class="bar">
  <div class="bar-count"><?= $count ?> tiket</div>
  <div class="bar-value" style="height: <?= $height ?>px;"></div>
  <div class="bar-label"><?= htmlspecialchars($movie) ?></div>
</div>

      </div>
    <?php endforeach; ?>
  </div>
  

  <div class="kesimpulan">
  <h3>📌 Kesimpulan</h3>
  <p>Film <strong><?= htmlspecialchars($filmTerlaris) ?></strong> menjadi film terlaris dengan total penjualan <strong><?= $data[$filmTerlaris] ?> tiket</strong>.</p>
  <p>Jumlah total tiket yang terjual untuk semua film adalah <strong><?= $totalTiket ?> tiket</strong>.</p>
  <p>Data ini dapat membantu menentukan jadwal tayang, promosi, dan keputusan film selanjutnya.</p>
</div>

<div class="corner-decoration"></div>
<div class="corner-decoration-bottom"></div>

<!-- Tambahan beberapa partikel neon -->
<div class="particle" style="top: 80px; left: 100px;"></div>
<div class="particle" style="top: 200px; left: 50px;"></div>
<div class="particle" style="top: 300px; right: 80px;"></div>
<div class="particle" style="top: 400px; right: 150px;"></div>

 <div style="text-align: center; margin-top: 2rem;">
  <a href="admin.php" class="back-button">⬅️ Kembali ke Halaman Admin</a>
</div>
</body>
</html>
