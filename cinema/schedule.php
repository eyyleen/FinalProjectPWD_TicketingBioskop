<?php 
// session_start();
include 'konek.php';
include 'ceklog.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<head>
    <title>Daftar Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body{
        background-color: #CA7842;
        margin: 0;
      }
  .navbar {
  padding-top:0rem;
  padding-bottom: 0rem;
  margin-left: 0rem;
  margin-right: 0rem;
}
.navbar-brand {
  font-size: 3rem;
  margin-left: 0.5rem;
}
.navbar img {
  height: 50px; /* tinggi logo */
  width: 100px; /* lebar logo */
}
  body {
    background-color: #fdfaf6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #1a1a1a;
  }

  .container {
    max-width: 1080px;
    margin: 0 auto;
    padding: 2rem 1rem;
  }

  h2 {
    font-size: 2.2rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 2.5rem;
    color: #2c3e50;
  }

  .cards-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 1.5rem;
  }

  .schedule-card {
    background-color: #ffffff;
    border-radius: 16px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.06);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
  }

  .schedule-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
  }

  .movie-poster {
    width: 100%;
    height: 180px;
    object-fit: cover;
  }

  .card-body {
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
  }

  .schedule-header {
    font-size: 1.1rem;
    font-weight: 600;
    color: #34495e;
    margin-bottom: 0.3rem;
  }

  .schedule-subtitle {
    font-size: 0.95rem;
    color: #7f8c8d;
    margin-bottom: 0.8rem;
  }

  .time-buttons {
    margin-top: auto;
  }

  .time-buttons a {
    display: inline-block;
    background-color: #2d6a8b;
    color: #ffffff;
    padding: 0.4rem 0.8rem;
    border-radius: 6px;
    margin: 0.2rem 0.2rem 0 0;
    text-decoration: none;
    font-size: 0.85rem;
    transition: background-color 0.2s;
  }

  .time-buttons a:hover {
    background-color: #1c4b65;
  }
  footer {
        display: grid;
        grid-gap: 5px;
        padding: 10px 10%;
        background-color: #4e4e4e;
        color: #FFF;
        bottom: 0;
        width: 100%;
        margin-top: 40px;
    }

    .footer-section {
        text-align: left;
        padding: 20px;
        width: 100%;
    }

    .footer-section1 {
        grid-row: 1;
    }

    .footer-section2 {
        grid-column: 2 /span 2;
    }

    .footer-section3 {
        grid-row: 2;
        grid-column: 1 / span 3;
    }

    .footer-section3>* {
        display: inline;
    }

    .footer-section3>a {
        float: right;
        padding: 0 20px;
    }

    .footer-section3>p {
        float: left;
    }

    .footer-section-inner-container {
        margin: 15px 0;
        padding: 25px;
        width: 100%;
        background-color: #666666;
        text-align: justify;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
    }

    .footer-section-inner-container>span {
        margin: 10px 0;
        bottom: 0px;
    }

</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm ">
    
  <div class="container">
    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="a.png" alt="Logo" width="200px" height="" class="me-2">
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
<div class="container">
  <h2>Jadwal Tayang Film Hari Ini</h2>

  <div class="cards-wrapper">
    <!-- Card 1 -->
    <div class="schedule-card">
      <img class="movie-poster" src="movie-poster-2.jpg" alt="Captain Marvel">
      <div class="card-body">
        <div class="schedule-header"> Cinépolis</div>
        <div class="schedule-subtitle">Qarmat Bitamrmat   - Reguler 3D </div>
        <div class="time-buttons">
          <a href="booking.php?movieID=2&time=1215">12:15</a>
          <a href="booking.php?movieID=2&time=1420">14:20</a>
          <a href="booking.php?movieID=2&time=1625">16:25</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="schedule-card">
      <img class="movie-poster" src="lego.jpg" alt="The Lego Movie">
      <div class="card-body">
        <div class="schedule-header">Bogor Square XXI</div>
        <div class="schedule-subtitle">The Lego Movie - Reguler 2D </div>
        <div class="time-buttons">
          <a href="booking.php?movieID=3&time=1300">13:00</a>
          <a href="booking.php?movieID=3&time=1500">15:00</a>
          <a href="booking.php?movieID=3&time=1700">17:00</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="schedule-card">
      <img class="movie-poster" src="movie-poster-4.jpg" alt="The Vanishing">
      <div class="card-body">
        <div class="schedule-header">Cinema XXI</div>
        <div class="schedule-subtitle">Nadi Elregal Elserri  - Reguler IMAX</div>
        <div class="time-buttons">
          <a href="booking.php?movieID=4&time=1115">11:15</a>
          <a href="booking.php?movieID=4&time=1330">13:30</a>
          <a href="booking.php?movieID=4&time=1530">15:30</a>
        </div>
      </div>
    </div>
       <div class="schedule-card">
      <img class="movie-poster" src="movie-thumb-5.jpg" alt="The Lego Movie">
      <div class="card-body">
        <div class="schedule-header">CGV Cinemas</div>
        <div class="schedule-subtitle">VICE - Reguler 3D </div>
        <div class="time-buttons">
          <a href="booking.php?movieID=5&time=1300">13:00</a>
          <a href="booking.php?movieID=5&time=1500">15:00</a>
          <a href="booking.php?movieID=5&time=1700">17:00</a>
        </div>
      </div>
    </div>
       <div class="schedule-card">
      <img class="movie-poster" src="movie-poster-6.jpg" alt="The Lego Movie">
      <div class="card-body">
        <div class="schedule-header">Cinemaxx</div>
        <div class="schedule-subtitle">The Vanishing - Reguler 2D </div>
        <div class="time-buttons">
          <a href="booking.php?movieID=6&time=1300">13:00</a>
          <a href="booking.php?movieID=6&time=1500">15:00</a>
          <a href="booking.php?movieID=6&time=1700">17:00</a>
        </div>
      </div>
    </div>
       <div class="schedule-card">
      <img class="movie-poster" src="jum.jpeg" alt="The Lego Movie">
      <div class="card-body">
        <div class="schedule-header">New Star Cineplex</div>
        <div class="schedule-subtitle">JUMBO - Reguler 7D </div>
        <div class="time-buttons">
          <a href="booking.php?movieID=18&time=1300">13:00</a>
          <a href="booking.php?movieID=18&time=1500">15:00</a>
          <a href="booking.php?movieID=18&time=1700">17:00</a>
        </div>
      </div>
    </div>
       <div class="schedule-card">
      <img class="movie-poster" src="c.jpeg" alt="The Lego Movie">
      <div class="card-body">
        <div class="schedule-header">Kota Cinema Mall</div>
        <div class="schedule-subtitle">VENOM - Reguler IMAX </div>
        <div class="time-buttons">
          <a href="booking.php?movieID=20&time=1300">13:00</a>
          <a href="booking.php?movieID=20&time=1500">15:00</a>
          <a href="booking.php?movieID=20&time=1700">17:00</a>
        </div>
      </div>
    </div>
       <div class="schedule-card">
      <img class="movie-poster" src="duri.jpeg" alt="The Lego Movie">
      <div class="card-body">
        <div class="schedule-header">Local Cinema</div>
        <div class="schedule-subtitle">Pengepungan di Bukit Duri - Reguler IMAX </div>
        <div class="time-buttons">
          <a href="booking.php?movieID=22&time=1300">13:00</a>
          <a href="booking.php?movieID=22&time=1500">15:00</a>
          <a href="booking.php?movieID=22&time=1700">17:00</a>
        </div>
      </div>
    </div>
       <div class="schedule-card">
      <img class="movie-poster" src="a.jpg" alt="The Lego Movie">
      <div class="card-body">
        <div class="schedule-header">Dakota Cinema</div>
        <div class="schedule-subtitle">Spiderman - Reguler 7D </div>
        <div class="time-buttons">
          <a href="booking.php?movieID=24&time=1300">13:00</a>
          <a href="booking.php?movieID=24&time=1500">15:00</a>
          <a href="booking.php?movieID=24&time=1700">17:00</a>
        </div>
      </div>
    </div>

    <!-- Tambahkan card lainnya sesuai jadwal -->
  </div>
 <footer>
    <div class="footer-section footer-section1">
        <h3>Tentang Bioskop</h3>
        <div class="footer-section-inner-container">
            <span>Kami menyediakan pengalaman Pemesanan tiket mudah</span>
            <span>Alamat: Jl. Tinggal Kenangan No.12 Yogyakarta</span>
            <span>Email: sinemacuy@gmail.com</span>
        </div>
    </div>

    <div class="footer-section footer-section2">
        <h3>Layanan</h3>
        <div class="footer-section-inner-container">
            <span>Booking Tiket Online</span>
            <span>Metode Pembayaran Fleksibel</span>
            <span>Fitur Keren</span>
        </div>
    </div>

    <div class="footer-section footer-section3">
        <p>© 2025 CinemaX. All rights reserved.</p>
        <a href="#">Kebijakan Privasi</a>
        <a href="#">Syarat & Ketentuan</a>
    </div>
</footer>
</div>

