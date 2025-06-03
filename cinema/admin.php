<?php
include 'ceklog.php';
// Cek apakah sudah login dan role-nya admin
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<style>
        @import url('https://fonts.googleapis.com/css?family=Lato');
    @import url('https://fonts.googleapis.com/css?family=Lobster');

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
        margin: 100px 0;
    }

    header {
        z-index: 1000;
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
    }

    /* Movie Section Styling */



    /* Admin Panel Styling */

    .admin-dropdown {
        float: right;
        font-style: normal;
        margin-left: 3px;
        font-size: 13px;
        position: absolute;
        right: 15px;
        top: 25px;
        margin: 0;
    }

    .admin-section-header {
        color: #FFF;
        width: 100% ;
        background-color: #3a3a3a;
        display: grid;
        grid-template-columns: 1fr 5fr;
    }

    .admin-user-avatar {
        width: 65px;
    }

    .admin-login-info {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .admin-login-info i {
        margin: 0 10px;
        cursor: pointer;
    }

    .admin-login-info img {
        margin-left: 10px;
    }

    .admin-notifications {
        padding: 10px 0;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        background-color: #3a3a3a;
        -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.52);
        -moz-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.52);
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.52);
        position: fixed;
        z-index: 10000;
        top: 75px;
        right: 10px;
        transition: all 0.5s ease;
    }

    .admin-notifications>h4 {
        padding: 0 10px;
    }

    .admin-notification {
        display: grid;
        grid-template-columns: 1fr 4fr;
        grid-gap: 10px;
        padding: 10px 10px;
        background-color: #3a3a3a;
    }

    .admin-notification:hover {
        background-color: #4b4b4b;
    }

    .admin-notification .notification-img {
        grid-column: 1;
        grid-row: 1 / span 2;
    }

    .notification-img img {
        width: 60px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .admin-notification h4 {
        grid-column: 2;
        grid-row: 1;
    }

    .admin-notification p {
        grid-column: 2;
        grid-row: 2;
    }

    .admin-logo {
        padding: 20px 10px;
        background-color: #5f5f5f;
    }

    .admin-container {
        display: grid;
        grid-template-columns: 1fr 5fr;
        height: 100vh;
    }

    .admin-section1 {
        background-color: #3a3a3a;
        height: 100%;
    }

    .admin-section1 ul li {
        width: 100%;
        padding: 20px 10px;
        background-color: #3a3a3a;
        color: #FFF;
        transition: all 0.3s ease;
        position: relative;
        cursor: pointer;
    }

    .admin-section1 ul li:hover {
        background-color: #6e5a11;
        color: #fff;
        border-left: #fff 3px solid;
    }

    .admin-section1 ul ul {
        background-color: #4e4e4e;
        margin-bottom: 1px;
    }

    .admin-section1 ul ul li {
        background-color: #4e4e4e;
        margin-bottom: 1px;
    }

    .admin-section1 ul li i {
        margin-right: 20px;
    }

    .admin-section2 {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
    }

    .admin-section-column {
        flex: 50%;
        max-width: 50%;
        padding: 0 10px;
    }

    .admin-section-panel {
        width: 100%;
        vertical-align: middle;
        background-color: #FFF;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        -webkit-box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.40);
        -moz-box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.40);
        box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.40);
        padding: 20px;
        margin: 20px 0;
    }

    .admin-panel-section-header {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding-bottom: 20px;
        border-bottom: #c7c7c7 1px solid;
    }

    .admin-panel-section-header>h2 {
        color: #6e6e6e;
    }

    .admin-panel-section-header>i {
        text-align: center;
        font-size: 30px;
        color: white;
        height: 60px;
        width: 60px;
        border-radius: 10%;
        line-height: 60px;
        transition: all 0.5s ease;
        margin-left: auto;
        cursor: pointer;
    }

    .admin-section-panel:hover .admin-panel-section-header>i {
        border-radius: 50%;
    }

    .admin-section-stats {
        display: flex;
        padding: 20px 0;
    }

    .admin-section-stats-panel {
        flex: 25%;
        max-width: 25%;
        text-align: center;
        border-right: #bdbdbd 1px solid;
    }

    .admin-section-stats-panel>i {
        font-size: 30px;
        color: white;
        height: 60px;
        width: 60px;
        border-radius: 50%;
        line-height: 60px;
        transition: all 0.5s ease;
        margin-bottom: 10px;
    }

    .admin-panel-section-booking-item {
        background-color: none;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        border-radius: 6px;
        border: #969696 1px solid;
        margin: 10px 0;
        overflow: hidden;
        display: flex;
        transition: all 0.6s ease;
    }

    .admin-panel-section-booking-item:hover {
        background-color: #d3d3d3;
    }

    .no-annot {
        text-align: center;
        padding: 10px 0;
    }

    .admin-panel-section-booking-response i {
        font-size: 25px;
        height: 50px;
        width: 50px;
        color: #FFF;
        line-height: 50px;
        text-align: center;
        display: block;
        cursor: pointer;
    }

    .admin-panel-section-booking-response .accept-booking {
        background-color: #1b9b4c;
    }

    .admin-panel-section-booking-response .decline-booking {
        background-color: #dc143c;
    }

    .admin-panel-section-booking-info {
        margin: 10px 10px;
        display: flex;
        flex: 100%;
        flex-direction: column;
        justify-content: center;
    }

    .admin-panel-section-booking-info div:first-child {
        border-bottom: #d3d3d3 1px solid;
    }

    .admin-panel-section-booking-info>div {
        height: 100%;
        display: flex;
    }

    .admin-panel-section-booking-info>div>* {
        display: inline-block;
        margin: auto 5px;
    }

    .admin-panel-section-booking-info>div .fa-circle {
        font-size: 8px;
    }

    .admin-section-panel2 form {

        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        align-items: center;
    }

    .admin-section-panel2 form input {
        border-radius: 4px;
        border: 1px solid #6e6e6e;
        padding: 10px;
        width: 32%;
        height: 42px;
        margin: 5px 0;
    }

    .admin-section-panel2 form input[type="file"] {
        width: 50%;
        padding: 0;
    }

    .admin-section-panel2 form button {
        border-radius: 4px;
        border: none;
        padding: 10px;
        width: 49%;
        text-align: center;
        background-color: #a3861e;
        color: #FFF;
        transition: all 0.7s ease;
        cursor: pointer;
        height: 42px;
    }

    .admin-section-panel2 form button:hover {
        background-color: #b6b6b6
    }

    /* Responsive Properties */

    @media all and (max-width:30em) {
        a.movie-book-btn {
            display: block;
            margin: 0.4em auto;
        }
    }

    /* Classes for JS */

    .hidden-div {
        display: none;
        transition: all 0.7s ease;
    }

    .show {
        display: block;
        transition: all 0.7s ease;
    }
     .bar {
      fill: steelblue;
      transition: fill 0.3s;
    }
    .bar:hover {
      fill: orange;
    }
    text {
      font-size: 14px;
      fill: black;
    }
</style>

<body>
    
    <?php
    $link = mysqli_connect("localhost", "root", "", "cinema");
    $sql = "SELECT * FROM bookingTable";
    $bookingsNo=mysqli_num_rows(mysqli_query($link, $sql));
    $messagesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM feedbackTable"));
    $moviesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM movieTable"));
    ?>
    <div class="admin-section-header">
        <div class="admin-logo">
            SINEMACUYY
        </div>
        <div class="admin-login-info">
            <i class="far fa-bell admin-notification-button"></i>
            <i class="far fa-comment-alt"></i>
            <a href="#">Welcome, <?= htmlspecialchars($_SESSION['email']); ?></a>
\            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            <!-- <a href="adminProfile.php"><i class="fas fa-user"></i>Profile</a> -->
            <img class="admin-user-avatar" src="../img/avatar.png" alt="">
        </div>
    </div>
    <div class="admin-container">
        <div class="admin-section admin-section1 ">
            <ul>
                <li><i class="fas fa-sliders-h"></i><a href="admin.php">Dashboard </a><i class="fas admin-dropdown fa-chevron"></i></li>
                <li><i class="fas fa-ticket-alt"></i><a href="todo.php">Bookings</a> <i class="fas admin-dropdown fa-chevron"></i></li>
                </li>
                <li><i class="fas fa-ticket-alt"></i><a href="movad.php">Movies</a> <i class="fas admin-dropdown fa-chevron"></i></li>
                 <li><i class="fas fa-ticket-alt"></i><a href="sold.php">Graph</a> <i class="fas admin-dropdown fa-chevron"></i></li>

            </ul>
            
        </div>
        
        <div class="admin-section-panel admin-section-panel5">
                    
                        <div class="admin-panel-section-header"><br>
                          <h2>To-do List <br> 
                            </h2>
                            <i class="fas fa-list-ol" style="background-color: #bb3c95"></i>
                        </div>
                    <div class="admin-panel-section-content"></div>
        <div class="admin-section admin-section2">
            <div class="admin-section-column">
                <div class="admin-section-panel admin-section-stats">
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
                        <h2 style="color: #cf4545"><?php echo $bookingsNo ?></h2>
                <li><i class=""></i><a href="todo.php">Bookings</a> <i class="fas admin-dropdown fa-chevron-right"></i></li>
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                        <h2 style="color: #4547cf"><?php echo $moviesNo ?></h2>
                <li><i class=""></i><a href="movad.php">Movies</a> <i class="fas admin-dropdown fa-chevron-right"></i></li>
                    </div>
                    
                    <div class="admin-section-stats-panel" style="border: none">
                        <i class="fas fa-envelope" style="background-color:rgb(8, 200, 249)"></i>
                        <h2 style="color: #3cbb6c"><?php echo $messagesNo ?></h2>
                <li><i class=""></i><a href="message.php">Message </a> <i class="bold"></i></li>
                    </div>
                     <div class="admin-section-stats-panel">
                        <i class="fas fa-ticket-alt" style="background-color:rgb(13, 142, 51)"></i>
                        <h2 style="color:rgb(30, 94, 5)">📊</h2>
                <li><i class=""></i><a href="sold.php">Graph</a> <i class="fas admin-dropdown fa-chevron-right"></i></li>
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-ticket-alt" style="background-color:rgb(238, 235, 19)"></i>
                        <h2 style="color:rgb(30, 94, 5)">📊</h2>
                <li><i class=""></i><a href="pay.php">Payments</a> <i class="fas admin-dropdown fa-chevron-right"></i></li>
                    </div>
                    
                     
                </div>
                
                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>Movies</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                    
<form action="" method="POST" enctype="multipart/form-data">
                        <input placeholder="Title" type="text" name="movieTitle" required>
                        <input placeholder="Genre" type="text" name="movieGenre" required>
                        <input placeholder="Duration" type="number" name="movieDuration" required>
                        <input placeholder="Release Date" type="date" name="movieRelDate" required>
                        <input placeholder="Director" type="text" name="movieDirector" required>
                        <input placeholder="Actors" type="text" name="movieActors" required>
                        <input type="file" name="movieImg" accept="image/*">
                        <button type="submit" value="submit" name="submit" class="form-btn">Add Movie</button>
                        <?php
                        
                        
                        
if (isset($_POST['submit'])) {
    // Ambil data teks
    $title = $_POST['movieTitle'];
    $genre = $_POST['movieGenre'];
    $duration = $_POST['movieDuration'];
    $relDate = $_POST['movieRelDate'];
    $director = $_POST['movieDirector'];
    $actors = $_POST['movieActors'];

    // Tangani file gambar
    $imgName = $_FILES['movieImg']['name'];
    $imgTmp = $_FILES['movieImg']['tmp_name'];
    $imgFolder = 'img/' . basename($imgName);

    // Upload file ke folder img/
    if (!empty($imgName)) {
        move_uploaded_file($imgTmp, $imgFolder);
    } else {
        $imgFolder = ''; // kosong jika tidak ada file
    }

    // Masukkan ke database
    $insert_query = "INSERT INTO movieTable (
                        movieImg,
                        movieTitle,
                        movieGenre,
                        movieDuration,
                        movieRelDate,
                        movieDirector,
                        movieActors
                    ) VALUES (
                        '$imgFolder',
                        '$title',
                        '$genre',
                        '$duration',
                        '$relDate',
                        '$director',
                        '$actors'
                    )";

    mysqli_query($link, $insert_query);
}
?> 
                    </form>
                    
                    <?php
if (isset($_POST['submit'])) {
    echo "<script>alert('Film berhasil ditambahkan!');</script>";
}
?>
                    <?php if (isset($_GET['success'])): ?>
    <div style="background-color: #3cbb6c; color: white; padding: 10px; margin-top: 10px; border-radius: 5px;">
        Film berhasil ditambahkan!
        
    </div>
<?php endif; ?>


                </div>
            </div>
                </div>
            </div>
        </div>  
    </div>


</body>

</html>