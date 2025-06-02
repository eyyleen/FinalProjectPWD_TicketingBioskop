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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Lato');
    @import url('https://fonts.googleapis.com/css?family=Lobster');

    * {
        /* background: transparent; */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Lato', sans-serif;
        text-decoration: none;
        color: unset;
    }

    body{
        background-color: brown;
        margin: 0;
        padding: 0;
        /* background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80'); */
    }
    /* Header Styling */

    #home-section-2,
    #home-section-3 {
        margin: 0px 0;
    }

    header {
        z-index: 1000;
    }

   
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
        width: 100%;
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

    

    .admin-logo {
        padding: 20px 10px;
        background-color: #5f5f5f;
    }

    .admin-container {
        display: grid;
        grid-template-columns: 1fr 5fr;
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
        margin-top: 0px;
        vertical-align: middle;
        background-color: brown;        
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
        color: black;
        font-family: 'Lobster', cursive;
        font-size: 100px;
        text-align: center;
        background: transparant;
        margin: 0;
        text-shadow: 2px 2px 0px #6e5a11, 4px 4px 0px #836d24, 6px 6px 0px #a88616, 8px 8px 0px #b08909, 10px 10px 0px #ab995e;
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
        background-color: transparant;
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
        background-color: transparant;
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

    /* .admin-section-panel2 form input[type="file"] {
        width: 49%;
        padding: 0;
    } */

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

    /* @media all and (max-width:30em) {
        a.movie-book-btn {
            display: block;
            margin: 0.4em auto;
        }
    } */

    /* Classes for JS */

    .hidden-div {
        display: none;
        transition: all 0.7s ease;
    }

    .show {
        display: block;
        transition: all 0.7s ease;
    }
            .admin-panel-section-header h2 {
            font-size: 5em; /* Ukuran font lebih kecil dan responsif */
            align: center;
            background: transparent;
            margin: 0;
        }

        .admin-panel-section-booking-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Grid responsif */
            gap: 15px;
            padding: 15px;
        }

        .admin-panel-section-booking-item {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #eee;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .admin-panel-section-booking-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .admin-panel-section-booking-response {
            background-color: #eee;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            border-bottom: 1px solid #ddd;
        }

        .admin-panel-section-booking-response a {
            margin-left: 8px;
            text-decoration: none;
            border-radius: 5px;
            overflow: hidden;
            display: inline-flex;
        }

        .admin-panel-section-booking-response i {
            font-size: 1.2em;
            color: #fff;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
        }

        .admin-panel-section-booking-info {
            padding: 15px;
        }

        .admin-panel-section-booking-info h3 {
            margin-top: 0;
            margin-bottom: 5px;
            color: #333;
            font-size: 1.5em;
        }

        .admin-panel-section-booking-info p {
            margin-bottom: 8px;
            color: #666;
            font-size: 0.9em;
        }

        .admin-panel-section-booking-info .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .admin-panel-section-booking-info .info-item i {
            margin-right: 8px;
            color: #999;
            font-size: 0.8em;
        }

        .no-annot {
            text-align: center;
            padding: 20px;
            color: #777;
        }
</style>

<?php
    $link = mysqli_connect("localhost", "root", "", "cinema");
    $sql = "SELECT * FROM bookingTable";
    $bookingsNo = mysqli_num_rows(mysqli_query($link, $sql));
    $messagesNo = mysqli_num_rows(mysqli_query($link, "SELECT * FROM feedbackTable"));
    $moviesNo = mysqli_num_rows(mysqli_query($link, "SELECT * FROM movieTable"));
    ?>
    <a href="admin.php">
        <div class="admin-section-header"><br>
            <a href="admin.php">
                <div class="admin-logo">
                    DASHBOARD</a>
                </div>
                <div class="admin-login-info">
                    <i class="far fa-bell admin-notification-button"></i>
                    <i class="far fa-comment-alt"></i>
                    <a href="#">Welcome, <?= htmlspecialchars($_SESSION['email']); ?></a>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                    <img class="admin-user-avatar" src="../img/avatar.png" alt="">
                </div>
        </div>
        <div class="admin-section-panel admin-section-panel1">
            <div class="admin-panel-section-header">
                <h2>Bookings</h2>
                <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
            </div>
            <div class="admin-panel-section-content">
                <div class="admin-panel-section-booking-list">
                    <?php
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<div class=\"admin-panel-section-booking-item\">\n";
                                echo "       <div class=\"admin-panel-section-booking-response\">\n";
                                echo "           <a href='delete.php?id=" . $row['bookingID'] . "' title=\"Tolak Booking\">Hapus<i class=\"fas fa-times decline-booking\" style=\"background-color: #dc143c;\"></i></a>
\n";                       
                                echo "           <a href='edit.php?id=" . $row['bookingID'] . "' title=\"Edit Booking\">Edit<i class=\"fas fa-edit\" style=\"background-color: #ffc107;\"></i></a>
\n";
                                echo "       </div>\n";
                                echo "       <div class=\"admin-panel-section-booking-info\">\n";
                                echo "           <h3>" . $row['movieName'] . "</h3>\n";
                                echo "           <p class=\"info-item\"><i class=\"fas fa-film\"></i> " . $row['bookingTheatre'] . "</p>\n";
                                echo "           <p class=\"info-item\"><i class=\"far fa-calendar-alt\"></i> " . $row['bookingDate'] . "</p>\n";
                                echo "           <p class=\"info-item\"><i class=\"far fa-clock\"></i> " . $row['bookingTime'] . "</p>\n";
                                echo "           <p class=\"info-item\"><i class=\"fas fa-user\"></i> " . $row['bookingFName'] . " " . $row['bookingLName'] . "</p>\n";
                                echo "           <p class=\"info-item\"><i class=\"fas fa-phone\"></i> " . $row['bookingPNumber'] . "</p>\n";
                                echo "       </div>\n";
                                echo "   </div>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo '<h4 class="no-annot">Tidak ada booking saat ini</h4>';
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    ?>
                    <?php if (isset($_GET['status'])): ?>
    <div id="notif-box" style="background:#d4edda; color:#155724; padding:10px 20px; margin-bottom:10px; border:1px solid #c3e6cb; border-radius:5px; position:relative;">
        <?php
        if ($_GET['status'] == 'deleted') echo "✅ Booking berhasil dibatalkan.";
        elseif ($_GET['status'] == 'updated') echo "✅ Booking berhasil diperbarui.";
        ?>
        <button onclick="document.getElementById('notif-box').style.display='none';" style="position:absolute; top:5px; right:10px; background:none; border:none; font-size:16px; color:#155724; cursor:pointer;">&times;</button>
    </div>
<?php endif; ?>


                </div>
            </div>
        </div>
</body>

</html>