<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>SINEMACUUYY</title>

<head>
    
        <div class="navbar-container">
        <nav class="navbar">           
            <div class="navbar-brand">
                <h1 class="navbar-heading"><img src="a.png" width="250px" alt="">SINEMACUUYY </h1>
</div>
            
            <ul class="navbar-menu">
                <li><a style="height: -5em;font-family: ITALIC; color: white;text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 0px 0px 0px #ab995e;
" href="index.php"><strong></strong>Home</a></li>
                <li><a style="font-family:italic; color: white; text-shadow: 0px 0px 0px #6e5a11, 4px 0px 0px #836d24, 0px 0px 0px #a88616, 2px 0px 0px #b08909, 1px 0px 0px #ab995e;"href="schedule.php">Schedule</a></li>
                <li><a style="font-family: italic; color: white;text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 1px 0px 0px #ab995e;"href="contact-us.php">Contact</a></li>
                <li><a style="font-family: ITALIC; color: white;text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 1px 0px 0px #ab995e;"href="movie.php">Movie</a></li>
                <li><a style="font-family: ITALIC; color: white;text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 1px 0px 0px #ab995e;"href="booking.php">Booking</a></li>
            
            </ul>
             
        </nav>
        
        
</head>

<style>
     @import url('https://fonts.googleapis.com/css?family=Lato');
    @import url('https://fonts.googleapis.com/css?family=Lobster');
body{
    display: flex;
    margin: 0;
    justify-content: center;
    align-items: center;
    min-height: 260vh;
    background: url('31ed8618df34fff5d3da4331adf79fe3.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}   
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Lato', sans-serif;
        text-decoration: none;
        color: unset;
    }

    /* Header Styling */

    #home-section-2,
    #home-section-3 {
        margin-top: 0;
        background-color: black;
        margin: 10;
        color: whitesmoke;
        font-family: 'Lobster', cursive;
    }   

    header {
        z-index: 1000;
    }

    .navbar-brand {
        height: 25em;
        overflow: hidden;
    }

    .navbar-brand:before {
        content: '';
        display: block;
        position: relative;
        top: -195%;
        left: -25%;
        height: 219%;
        width: 200%;
        background: #aa964c;
        box-shadow: 0px 8px 0px rgba(255, 31, 31, 0.1);
        transform: rotateZ(-6deg) skew(-6deg);
    }

    .navbar-brand .navbar-heading {
        position: absolute;
        top: -5vmax;
        left: 8vmax;
        padding: 0;
        margin: 0;
        color: #fff;
        font-size: 8em;
        font-family: 'ALGERIAN', cursive;
        transform: rotateZ(0deg);
        text-shadow: 2px 2px 0px #6e5a11, 4px 4px 0px #836d24, 6px 6px 0px #a88616, 8px 8px 0px #b08909, 10px 10px 0px #ab995e;
    }

    nav {
        display: flex;
        align-items: center;
        
    }

    .navbar {
        display: flex;
        justify-content: center;
    }
      #wei {
        position: absolute;
        top: 250px;
        left: 0;
        width: 100%;
        height: 10%;
    position: absolute;
        /* fontawesome: 100px;} */
    font-family: 'Lobster', cursive;
        font-size: 100px;
        color: #fff;
        text-align: center;
        z-index: 100;
    }
.banner h1{
    margin-top: 10px;
    margin-bottom: 10px;
}
h1 span:Before{
        content: '';
        animation: gerak infinite 5s ease;
        transform: translateY(-50%);
        color: #fff;
        font-size: 50px;
        font-family: 'Lobster', cursive;
                text-shadow: 2px 2px 0px #6e5a11, 4px 4px 0px #836d24, 6px 6px 0px #a88616, 8px 8px 0px #b08909, 10px 10px 0px #ab995e;

}
@keyframes gerak {
    0%{
    content: 'SELAMAT DATANG DI SINEMACUUYY';
    }
    50%{
        content:'SILAHKAN PILIH FILM FAVORITMU';
    }
    100%{
       content: 'TERIMA KASIH TELAH KE SINEMACUUYY';
    }
}

    .navbar-menu {
        list-style-type: none;
        
        /* margin: 0px ; */
        margin-top: 60px;
        right: 100%;
        padding: 0;
        width: 41%;
        overflow: hidden;
        left: 100%;
        background-color: none ;
        border-radius: 50px;
        box-shadow: 0px 8px 0px rgba(255, 31, 31, 0.1);
    }

    .navbar ul li {
        float: left;
        display: block;
        transition-duration: 0.5s;
        border-radius: 50px;
    }

    .navbar ul li:hover {
        cursor: pointer;
        background-color: #aa964c;
    }

    .navbar ul li:hover>a {
        color:rgb(0, 0, 0);
    }

    .navbar-menu li ul {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        transition: all 0.5s ease;
        background-color:rgb(4, 4, 4);
        
    }

    .navbar-menu li a {
        display: block;
        color: black;
        text-align: center;
        padding: 12px 36px;
        
        text-decoration: none;
    }

    .navbar-container {
        position: absolute;
        top: 8em;
        right: -10%;
        
    }

    /* Footer Styling */

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

    /* Movie Section Styling */

    .movie-show-container {
        margin-top: 0;
        padding: 0 10%;
    }

    .movie-show-container>h1 {
        color: whitesmoke;
        text-align: left;
        padding: 0 0 10px 0;
        font-size: 50px;
        font-family: 'lobster', cursive;
text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 10px 0px 0px #ab995e;    }
    
    .movie-show-container>h3 {
        color: whitesmoke;
        text-align: left;
        padding: 0 0 10px 0;
    }

    .movie-show-container>h3:after {
        content: '';
        display: block;
        height: 3px;
        width: 7%;
            background: #6e5a11;
        position: relative;
        bottom: -10px;
    }

    .movies-container {
        display: grid;
        grid-column-gap: 10px;
        grid-template-columns: auto auto auto auto auto auto;
        padding: 10px 0;
    }

    .movie-box {
        position: relative;
        margin: 10px 0;
    }

    .movie-box img {
        display: block;
        height: 100%;
        width: 100%;
    }

    .movie-box .movie-info {
        padding: 50% 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .7s ease;
        background-color: rgb(0, 0, 0);
    }

    .movie-box:hover .movie-info {
        opacity: 0.8;
    }

    .movie-info>h3 {
        padding: 10px 0;
        color: #FFF;
    }

    .movie-info>a {
        display: inline-block;
        padding: 0.35em 1.2em;
        border: 0.1em solid #FFFFFF;
        border-radius: 0.13em;
        box-sizing: border-box;
        text-decoration: none;
        font-weight: 300;
        color: #FFFFFF;
        text-align: center;
        transition: all 0.2s;
    }

    .movie-info>a:hover {
        color: #000000;
        background-color: #FFFFFF;
    }

    /* Trailers Section */

    .trailers-section>h1,
    .trailers-section>h3 {
        padding: 0 10%;
    }

    .trailers-section>h1 {
        text-align: left;
        color: whitesmoke;
    }

    .trailers-section>h3 {
        margin-top: 40px;
        color: whitesmoke;
        font-size: 50px;
        text-align: center;
        font-family: 'Algerian', cursive;
/* text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 10px 0px 0px #ab995e; */

    }

    .trailers-section>h3:after {
        content: '';
        display: block;
        height: 3px;
        width: 7%;
        /* background: #6e5a11; */
        position: relative;
        bottom: -10px;
    }

    .trailers-grid {
        margin: 60px 0;
        display: grid;
        grid-template-columns: auto auto auto;
        height: 80vh;
        margin-top: 0;
    }

    .trailers-grid-item {
        font-size: 30px;
        text-align: center;
        overflow: hidden;
        width: 100%;
        height: 100%;
        position: relative;
        vertical-align: middle;
    }

    .trailer-item-video {
        width: 100%;
        height: 100%;
    }

    .trailers-grid-item img {
        width: 100%;
        height: 100%;
        display: block;
    }

    .trailer-item-info {
        position: absolute;
        top: 50%;
        transform: translate(0, -50%);
        width: 100%;
        height: 100%;
        margin: auto;
        z-index: 10;
        vertical-align: middle;
        opacity: 0;
        transition: .7s ease;
        background-color: rgb(0, 0, 0);
        padding: 85px 0;
    }

    .trailer-item-info:hover {
        opacity: 0.8;
    }

    .trailer-item-info h3 {
        vertical-align: middle;
        color: rgb(255, 255, 255);
    }

    .trailer-item-info i {
        margin: 10px;
        color: rgb(255, 255, 255);
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .trailer-item-info i:hover {}

    /* Services Section Styling */

    .services-section {
        padding: 0 10%;
        text-align: center;
    }

    .services-section>h1 {
        color: whitesmoke;
        text-align: left;
        padding: 0 0 10px 0;
    }

    .services-section>h3 {
        color: whitesmoke;
        text-align: left;
        padding: 0 0 20px 0;
    }

    .services-section>h3:after {
        content: '';
        display: block;
        height: 3px;
        width: 7%;
        /* background: #6e5a11; */
        position: relative;
        bottom: -10px;
    }

    .services-container {
        margin: 40px 0;
        display: grid;
        grid-template-columns: auto auto auto;
        grid-column-gap: 4%;
    }

    .service-item>h2 {
        color: whitesmoke;
        padding: 25px 0;
    }

    .service-item-icon i {
        font-size: 40px;
        color: white;
        height: 120px;
        width: 120px;
        background-color: rgb(126, 126, 126);
        border-radius: 50%;
        border: #c7c7c7 12px solid;
        line-height: 90px;
        transition: all 0.5s ease;
    }

    .service-item-icon i:hover {
        background-color: #c7c7c7;
        color: rgb(126, 126, 126);
    }


   
</style>

<body>
    
                <h1 id="wei"><span></span></h1>

    <?php
    $link = mysqli_connect("localhost", "root", "", "cinema");
    $sql = "SELECT * FROM movieTable";
    ?>

    <div id="home-section-1" class="movie-show-container">
        <h1>Currently Showing</h1>
        <h3>Book a movie now</h3>

        <div class="movies-container">

           <?php
include 'konek.php';

$sql = "SELECT * FROM movietable"; // ambil semua film

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)){
            echo '<div class="movie-box">';
            echo '<img src="'. $row['movieImg'] .'" alt=" ">';
            echo '<div class="movie-info">';
            echo '<h3>'. $row['movieTitle'] .'</h3>';
            echo '<a href="movie.php"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
            echo '</div>';
            echo '</div>';
        }
        mysqli_free_result($result);
    } else {
        echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
    }
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
        </div>
    </div>
    
    <div id="home-section-2" class="services-section">
        <h1>How it works</h1>
        <h3>3 Simple steps to book your favourit movie!</h3>

        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
                <h2>1. Choose your favourite movie</h2>
                <p>choose the movie you want to watch at our theaters</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-credit-card"></i>
                </div>
                <h2>2. Pay for your tickets</h2>
                <p>pay with multiple payment methods</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
                <h2>3. Enjoy watching</h2>
                <p>Thanks! If you're settling in to watch something, enjoy the show!</p>
            </div>
            <div class="service-item"></div>
            <div class="service-item"></div>
        </div>
    </div>
    <div id="home-section-3" class="trailers-section">
        <h1 class="section-title">Explore new movies</h1>
        <h3>Now showing</h3>
        <div class="trailers-grid">
            <div class="trailers-grid-item">
                <img src="jum.jpeg" alt="">
                <div class="trailer-item-info" data-video="Z1BCujX3pw8">
                    <h3>JUMBO</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/movie-thumb-2.jpg" alt="">
                <div class="trailer-item-info" data-video="OPEfsEaFv_c">
                    <h3>Karmat Bytmrmt</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="lego.jpg" alt="">
                <div class="trailer-item-info" data-video="cksYkEzUa7k">
                    <h3>The Lego Movie</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="movie-thumb-4.jpg" alt="">
                <div class="trailer-item-info" data-video="Ze5YA4mkzhI">
                    <h3>Secret Men Club</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/movie-thumb-5.jpg" alt="">
                <div class="trailer-item-info" data-video="lbUAVTc7NTo">
                    <h3>VICE</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/movie-thumb-6.jpg" alt="">
                <div class="trailer-item-info" data-video="RyFlfN4dD14">
                    <h3>The Vanishing</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
        </div>
        <div id="home-section-3" class="trailers-section">
        <h3 style="background-color:none; font-size:5em; margin-top:0px;">Coming Soon!</h3>
        <div class="trailers-grid">
            
            <div class="trailers-grid-item">
                <img src="dit.jpeg" alt="">
                <div class="trailer-item-info" data-video="Z1BCujX3pw8">
                    <h3>Adit Sopo Jarwo</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="movie-poster-1.jpg" alt="">
                <div class="trailer-item-info" data-video="OPEfsEaFv_c">
                    <h3>Captain Marvel</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="b.jpg" alt="">
                <div class="trailer-item-info" data-video="cksYkEzUa7k">
                    <h3>Upp</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="log.jpg" alt="">
                <div class="trailer-item-info" data-video="Ze5YA4mkzhI">
                    <h3>The Lego Movie 2</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="med.jpeg" alt="">
                <div class="trailer-item-info" data-video="lbUAVTc7NTo">
                    <h3>Cocok Ko Rasa?</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="f-1.jpg" alt="">
                <div class="trailer-item-info" data-video="RyFlfN4dD14">
                    <h3>Djanggo</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
        </div>
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
</body>
</html>