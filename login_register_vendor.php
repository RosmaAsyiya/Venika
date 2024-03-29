<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <!-- <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
    </script> -->
    <script src="https://kit.fontawesome.com/3709d60cb3.js" crossorigin="anonymous"></script>
    <title>Venika</title>
    <link rel="stylesheet" href="css/style.css">
    
    <!--===== Boxicons CSS =====-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login_vendor.php" method="POST" class="sign-in-form">
                    
                    <h2 class="title">Vendor Login</h2>
                    
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
                </form>

                <form action="register.php" method="POST" class="sign-up-form">
                    <h2 class="title">Register</h2>
                    <div class="input-field">
                        <i class="fas fa-solid fas fa-users"></i>
                        <input type="text" placeholder="Nama Vendor">
                    </div>
                    <!-- <div class="input-field">
                        <i class="fas fa-list"></i>
                        <input type="text" placeholder="Kategori Vendor">
                    </div> -->
                    <div class="select-menu">
                        <div class="select-btn input-field">
                            <i class="fas fa-list"></i>
                            <span class="sBtn-text">Jenis Layanan</span>
                            <i class="fas fa-solid fa-angle-down"></i>
                        </div>
                
                        <ul class="options">
                            <li class="option">
                                <span class="option-text">Dekorasi</span>
                            </li>
                            <li class="option">
                                <span class="option-text">Katering</span>
                            </li>
                            <li class="option">
                                <span class="option-text">Makeup</span>
                            </li>
                            <li class="option">
                                <span class="option-text">Sound System</span>
                            </li>
                            <li class="option">
                                <span class="option-text">Gedung</span>
                            </li>
                            <li class="option">
                                <span class="option-text">Foto & Video</span>
                            </li>
                            <li class="option">
                                <span class="option-text">Sewa Mobil</span>
                            </li>
                            <li class="option">
                                <span class="option-text">Gaun Pengantin</span>
                            </li>
                        </ul>
                    </div>

                    <!-- <script src="js/script.js"></script> -->
                    
                    <!-- <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                      </div> -->
                    <div class="input-field">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" name="reg_kecamatan" placeholder="Kecamatan">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="reg_email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="reg_pass" placeholder="Password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="reg_pass2" placeholder="Konfirmasi Password">
                    </div>
                    <input type="submit" value="register" name="register" class="btn solid">

                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Belum Punya Akun ?</h3>
                        <p>Daftar, dan promosikan bisnis vendor anda sekarang...</p>
                     <button class="btn transparent" id="sign-up-btn">Register</button>

                     <p>
                         Ingin Daftar Sebagai User? 
                         <a href="index.php" class="daftar_vendor"> Daftar User</a>
                    </p>
                    </div>

                    <img src="img/illustrasi_loginvendor.png" class="image_login_vendor" alt="">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Sudah Punya Akun ?</h3>
                        <p>Dapatkan klien lebih banyak, mudah dan cepat melalui Venika</p>
                        <button class="btn transparent" id="sign-in-btn">Login</button>
                    </div>
                    <img src="img/illustrasi_registervendor.png" class="image" alt="">
                </div>
            </div>
        </div>
        <script src="js/app.js"></script>
        
    </body>
</html>