<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website With Login & Registration | Codehal</title>
    <link rel="stylesheet" href="index.css">
</head> 
<body>
    <header>
        <h2 class="logo">SINEMACUYY</h2>
        <nav class="navigation">
          <a href="daftar_film.html">Daftar Film</a>
          <a href="daftar.html">Jadwal</a>
          <a href="#">Pilih Seat</a>
          <a href="#">Tiket</a>
        <button class="btnLogin-popup">Login</button>
    </nav> 
    </header>
        <div class="wrapper" >
            <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action= "#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label >Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label >Password</label>
                </div>
                <div class="remember-forgot"> 
                <label><input type="checkbox"> 
                Remember me</label> 
                <a href="#">Forgot Password?</a> 
                </div> 
                <button type="submit" class="btn">Login</button>
                <div class="login-register"> 
                <p>Don't have an account? <a 
                href="#" 
                class="register-link">Register</a>
            </p> 
                </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Registration</h2>
                <form action= "#">
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon></span>
                        <input type="text" required>
                        <label >Username</label>
                    </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label >Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label >Password</label>
                </div>
                <div class="remember-forgot"> 
                <label><input type="checkbox"> 
                I Agree to the terms & conditions</label> 
                </div> 
                <button type="submit" class="btn">Register</button>
                <div class="login-register"> 
                <p>ALready have an account? <a 
                href="#" 
                class="login-link">login</a>
            </p> 
                </div>
                </form>
            </div>
        </div>

    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>