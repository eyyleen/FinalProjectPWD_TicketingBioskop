<?php
include 'ceklog.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Contact Us</title>   
</head>
<style>
    body {
        font-family: 'Lato', sans-serif;    
        color: #b6b6b6;
    background: url('31ed8618df34fff5d3da4331adf79fe3.jpg') no-repeat;
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
    }

    .contact-us-container {
        Background-color: rgba(0, 0, 0, 0.5);
        display: grid;
        grid-gap: 25px;
        grid-template-areas: 'contact-form contact-form contact-info';
        margin: 30px 15%;
        margin-top: 190px;
        border-radius: 40px;
    }

    .contact-us-section {
        overflow: hidden;
        color: whitesmoke;
    }

    .contact-us-section h1 {
        padding: 20px 0;
        border-bottom: #4e4e4e  solid 1px;
        margin-bottom: 20px;
        color: whitesmoke;
        font-size: 3em;
        font-family: 'Lobster', cursive;
    }

    .contact-us-section1 {
        grid-area: contact-form;
        color: black;  
    }

    .contact-us-section1 form * {
        padding: 10px;
        margin: 10px 0;
    }

    .contact-us-section1 form *:not(button) {
        border: #6e5a11 1px solid;
    }

    .contact-us-section1 form button {
        background-color: green;
        color: white;
        border: none;
        cursor: pointer;
    }

    .contact-us-section2 {
        grid-area: contact-info;
    }

    .contact-us-section2 h3 {
        color:whitesmoke;
        border-bottom: #6e5a11 solid 1px;
        padding: 10px 0;
        margin-bottom: 10px;
    }/* }
    body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 250vh;
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
    } */

    /* Header Styling */

    #home-section-2,
    #home-section-3 {
        margin: 100px 0;
        color: whitesmoke;
        font-family: 'Lobster', cursive;
        transform: rotateZ(0deg);
        text-shadow: 2px 2px 0px #6e5a11, 4px 4px 0px #836d24, 6px 6px 0px #a88616, 8px 8px 0px #b08909, 10px 10px 0px #ab995e;
    }   

    header {
        z-index: 1000;
    }

    .navbar-brand {
        height: 10em;
        overflow: hidden;
    }

    .navbar-brand:before {
        content: '';
        display: block;
        position: relative;
        top: -10%;
        left: -25%;
        height: 219%;
        width: 20%;
        background: #aa964c;
        box-shadow: 0px 8px 0px rgba(255, 31, 31, 0.1);
        transform: rotateZ(-6deg) skew(-6deg);
    }

    .navbar-brand .navbar-heading {
        position: absolute;
        top: -9vmax;
        left: -7vmax;
        padding: 0;
        margin: 0;
        color: #fff;
        font-size: 8em;
        font-family: 'Lobster', cursive;
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


    .navbar-menu {
        list-style-type: none;
        margin: 0px ;
        margin-top: -50px;
        right: 10%;
        padding: 0;
        overflow: hidden;
background-color: black;
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
        right: 30%;
    }
</style>

<body>
<?php 
        $link = mysqli_connect("localhost", "root", "", "cinema");
?>

      
    <div class="navbar-container">
        <nav class="navbar">
            <div class="navbar-brand">
                <h1 class="navbar-heading">SINEMACUUYY</h1>
            </div>  
            <ul class="navbar-menu">
                <li><a style="height: -5em;font-family: algerian; color: white;text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 0px 0px 0px #ab995e;
" href="index.php"><strong></strong>Home</a></li>
                <li><a style="font-family: algerian; color: white; text-shadow: 0px 0px 0px #6e5a11, 4px 0px 0px #836d24, 0px 0px 0px #a88616, 2px 0px 0px #b08909, 1px 0px 0px #ab995e;"href="schedule.php">Schedule</a></li>
                <li><a style="font-family: algerian; color: white;text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 1px 0px 0px #ab995e;"href="contact-us.php">Contact</a></li>
                <li><a style="font-family: algerian; color: white;text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 1px 0px 0px #ab995e;"href="logout.php">Logout</a></li>
                <li><a style="font-family: algerian; color: white;text-shadow: 2px 2px 0px #6e5a11, 4px 0px 0px #836d24, 6px 0px 0px #a88616, 8px 0px 0px #b08909, 1px 0px 0px #ab995e;"href="movie.php">Movie</a></li>
            
            </ul>
        </nav>
    </div>
  
        
    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1>Contact</h1>
            <p>Contact us here </p>
            <form action="" method="POST">
                <input placeholder="First Name" name="fName" required><br>
                <input placeholder="Last Name" name="lName" ><br>
                <input placeholder="E-mail Address" name="eMail" required><br>
                <textarea placeholder="Enter your message !" name="feedback" rows="10" cols="30" required></textarea><br>
                <button type="submit" name="submit" value="submit">Send your Message</button>
                <?php
                    if(isset($_POST['submit'])){
                        $insert_query = "INSERT INTO 
                        feedbackTable ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        senderfeedback)
                        VALUES (        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$_POST["eMail"]."',
                                        '".$_POST["feedback"]."')";
                        mysqli_query($link,$insert_query);
                        }
                    ?>
            </form>
            
        </div>
        <div class="contact-us-section contact-us-section2">
            <h1>Address & Info</h1>
            <h3>Phone Numbers</h3>
            <p> +6289508198431<br>
                +6282163336443</p>
            <h3>Address</h3>
            <p>Jalan Tinggal Kenangan, Lelah Batin - S.M. Box 2</p>
            <h3>E-mail</h3>
            <p><a href="mailto:sinemacuy@gmail.com">sinemacuy@gmail.com</a></p>
        </div>
    </div>

</body>

</html>
