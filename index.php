<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script> -->
    <title>Venika</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login.php" method="POST" class="sign-in-form">
                    <h2 class="title">Login</h2>
                    
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" 
                        name="username" 
                        placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" 
                        name="password" 
                        placeholder="Password">
                    </div>

                    <p class="lupa_pass">Lupa Password ?</p>
                    <input type="submit" name="login" value="login" class="btn solid">

                    <!-- <p class="social_text">Or Sign in with social media</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div> -->
                </form>

                <form action="register.php" method="POST" class="sign-up-form">
                    <h2 class="title">Register</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="reg_user" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="reg_email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="reg_pass" placeholder="Password">
                    </div>
                    <input type="submit" name="register" value="register" class="btn solid">

                    <!-- <p class="social_text">Or Sign up with social media</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div> -->

                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Belum Punya Akun ?</h3>
                        <p>Cari kebutuhan pernikahan lebih mudah dan cepat dengan venika</p>
                     <button class="btn transparent" id="sign-up-btn">Register</button>
                    </div>

                    <img src="img/illustrasi_login.png" class="image" alt="">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Sudah Punya Akun ?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <button class="btn transparent" id="sign-in-btn">Login</button>
                    </div>
                    <img src="img/illustrasi_register.png" class="image" alt="">
                </div>
            </div>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>