<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="frontend/css/list_vendor.css">
    <link rel="stylesheet" href="frontend/css/style_nav_login.css">

    <!-- Style Responsive -->
    <link rel="stylesheet" href="frontend/css/responsive.css">

    <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
    </script>

    <!-- Swiper CSS -->
    <!-- <link rel="stylesheet" href="css/swiper-bundle.min.css"> -->

    <!-- Style Swiper CSS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <title>Venika</title>
  </head>
  <?php
if (isset($_SESSION['username'])){
?>
  <body>
  <!-- Navbar Login -->
  <nav class="navbar navbar-expand-lg bg-transparent navbar-light position-fixed w-100">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"
          class="d-inline-block align-text-top" me-3>Venika</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="katering.php">Vendor</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
        </ul>

        <div>
          <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
              <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                  <div class="navbar-container container-fluid">

                    <ul class="nav-right">
                      <li class="user-profile header-notification">
                        <a href="#" class="arrowdown">
                        <img src="frontend/img/circle-user-solid.svg" class="img-radius" alt="User-Profile-Image">
                          <?php echo' <span>' . $_SESSION['username'] . '</span> ';?>
                          <i class="fas fa-angle-down toggle"></i>
                        </a>
                        <ul class="show-notification profile-notification">
                          <li class="">
                            <a href="#!">
                              <i class="fas fa-user"></i> Lihat Profil
                            </a>
                          </li>
                          <li class="">
                            <a href="#">
                              <i class="fas fa-question"></i> FAQ
                            </a>
                          </li>
                          <li class="">
                            <a href="logout.php">
                              <i class="fas fa-arrow-right-from-bracket"></i> Keluar
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>

          <script type="text/javascript" src="js/jquery.min.js"></script>


          <script src="js/pcoded.min.js"></script>
          <script src="js/vertical-layout.min.js"></script>
          <script type="text/javascript" src="js/user_profile.js"></script>

        </div>
      </div>
    </div>
  </nav>
  <?php }
  else {
  ?>
  <body>
  <!-- Navbar sebelum Login -->
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fixed w-100">
    <div class="container">

      <a class="navbar-brand" href="#">
        <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"
          class="d-inline-block align-text-top" me-3>Venika</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">

          <li class="nav-item mx-3">

            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="katering.php">Vendor</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
        </ul>

        <div>

        <a href="login.php"><button class="btn_register">Register</button></a>
          <a href="login.php"><button class="btn_login">Login</button></a>
        </div>
      </div>
    </div>
  </nav>

<?php
  }
?>

      <!-- HERO SECTION -->
      <section id="hero">
            <!-- h-100 : height agar memenuhi layar -->
        <div class="container" h-100>
          <div class="row" h-100>
            <div class="col-md-6 hero-tagline my-auto">
                <img src="img/bg_katering2.jpg" alt="" class="position-absolute end-0 bottom-0 img-hero">
              <h1>Ingin Katering Seperti Apa ?</h1>
              <p>Temukan katering terbaik versi anda disini...</p>
              <button class="btn_cari_sekarang">Cari sekarang...</button>
            </div>
          </div>
        </div>
      </section>

      <!-- Search Section -->

  <section id="search">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>VENDOR</h2>
        </div>
      </div>

      <div class="col-10 mx-auto rectangle">
        <div class="row">
          <div class="col-auto">
            <input type="text" class="form-control" placeholder="Cari vendor..." aria-label="Cari vendor">
          </div>

          <!-- <div class="col-auto">
                <button class="btn_dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategori
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Dekorasi</a></li>
                  <li><a class="dropdown-item" href="#">Katering</a></li>
                  <li><a class="dropdown-item" href="#">Makeup</a></li>
                  <li><a class="dropdown-item" href="#">Sound System</a></li>
                  <li><a class="dropdown-item" href="#">Gedung</a></li>
                  <li><a class="dropdown-item" href="#">Foto & Video</a></li>
                  <li><a class="dropdown-item" href="#">Sewa Mobil</a></li>
                  <li><a class="dropdown-item" href="#">Gaun Pengantin</a></li>
                </ul>
              </div> -->

          <!-- Filter Jenis Layanan -->
          <div class="col-auto filter_jenis layanan">
            <select name="jenis_layanan" class="form-select" id="inputGroupSelect01">
              <option selected class="option">Jenis Layanan</option>
              <option class="option" value="1">Dekorasi</option>
              <option class="option" value="2">Katering</option>
              <option class="option" value="3">Makeup</option>
              <option class="option" value="4">Sound System</option>
              <option class="option" value="5">Music Band</option>
              <option class="option" value="6">Gedung</option>
              <option class="option" value="7">Foto & Video</option>
              <option class="option" value="8">Sewa Mobil</option>
              <option class="option" value="9">Gaun Pengantin</option>
              <option class="option" value="10">MC</option>
            </select>
          </div>

          <!-- Filter Lokasi -->
          <div class="col-auto ">
            <select name="lokasi" class="form-select" id="inputGroupSelect01">
              <option selected class="option">Lokasi</option>
              <option class="option" value="1">Banyumanik</option>
              <option class="option" value="2">Candisari</option>
              <option class="option" value="3">Gajahmungkur</option>
              <option class="option" value="4">Gayamsari</option>
              <option class="option" value="5">Genuk</option>
              <option class="option" value="6">Gunungpati</option>
              <option class="option" value="7">Mijen</option>
              <option class="option" value="8">Ngaliyan</option>
              <option class="option" value="9">Pedurungan</option>
              <option class="option" value="10">Semarang Barat</option>
              <option class="option" value="11">Semarang Selatan</option>
              <option class="option" value="12">Semarang Tengah</option>
              <option class="option" value="13">Semarang Utara</option>
              <option class="option" value="14">Tembalang</option>
              <option class="option" value="15">Tugu</option>
            </select>
          </div>

          <!-- Filter Adat -->
          <div class="col-auto filter_adat">
            <select name="adat" class="form-select" id="inputGroupSelect01">
              <option selected class="option">Adat</option>
              <option class="option" value="1">Bali</option>
              <option class="option" value="2">Batak</option>
              <option class="option" value="3">Betawi</option>
              <option class="option" value="4">Eropa</option>
              <option class="option" value="5">Jawa</option>
              <option class="option" value="6">Melayu</option>
              <option class="option" value="7">Sunda</option>
            </select>
          </div>

          <!-- Button Cari -->
          <div class="col-auto">
            <button name="search" class="btn_search" type="button" id="button-addon2">Cari</button>
          </div>
        </div>
      </div>

    </div>
  </section>

      <!-- KATERING SECTION -->
      <section id="katering">
          <div class="container">
              <div class="row">
                  <div class="col-12">

                  </div>
              </div>
              <div class="row">
                  <div class="col-4">
                      <div class="card" style="width: 22rem;">
                          <img src="img/mawar_katering.png" alt="">
                          <div class="card-body">
                              <h4>Mawar Katering</h4>
                              <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                              <!-- <img src="img/love.png" alt=""> -->
                              <i class="fas fa-heart"></i>
                          </div>
                      </div>
                  </div>

                  <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="img/japanese_katering.jpg" alt="">
                        <div class="card-body">
                            <h4>Japanese Katering</h4>
                            <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                            <!-- <img src="img/love.png" alt=""> -->
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="img/Agnez_katering.jpg" alt="">
                        <div class="card-body">
                            <h4>Agnez Katering</h4>
                            <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                            <!-- <img src="img/love.png" alt=""> -->
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                    <?php include("get_data_katering.php")?>
                        <!-- <img src="img/mawar_katering.png" alt="">
                        <div class="card-body">
                            <h4>Mawar Katering</h4> -->
                            <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                            <!-- <img src="img/love.png" alt=""> -->
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="img/mawar_katering.png" alt="">
                        <div class="card-body">
                            <h4>Mawar Katering</h4>
                            <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                            <!-- <img src="img/love.png" alt=""> -->
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="img/mawar_katering.png" alt="">
                        <div class="card-body">
                            <h4>Mawar Katering</h4>
                            <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                            <!-- <img src="img/love.png" alt=""> -->
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="img/mawar_katering.png" alt="">
                        <div class="card-body">
                            <h4>Mawar Katering</h4>
                            <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                            <!-- <img src="img/love.png" alt=""> -->
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="img/mawar_katering.png" alt="">
                        <div class="card-body">
                            <h4>Mawar Katering</h4>
                            <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                            <!-- <img src="img/love.png" alt=""> -->
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="img/mawar_katering.png" alt="">
                        <div class="card-body">
                            <h4>Mawar Katering</h4>
                            <p>Tembalang, Semarang <br> <span class="text-danger">Mulai dari Rp.95.000</span></p>
                            <!-- <img src="img/love.png" alt=""> -->
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </section>



      <!-- FOOTER SECTION -->
      <footer class="bg">
        <div class="footer-content">
          <h3>Venika</h3>
          <p>Venika adalah platform digital yang menyediakan layanan informasi vendor kebutuhan di daerah Semarang dan sekitarnya.</p>
          <ul class="fast_link">
            <li>Kontak</li>
            <li>Vendor</li>
            <li>Tentang Kami</li>
            <li>FAQ</li>
          </ul>
          <ul class="sosmed">
            <li><a href="#"><img src="img/facebook-circle-fill.png"></a></li>
            <li><a href="#"><img src="img/instagram-fill.png"></a></li>
            <li><a href="#"><img src="img/twitter-fill.png"></a></li>
          </ul>
        </div>
        <div class="footer-bottom">
          <p>Copyright &copy;2022 Venika | designed by <span>Venika</span></p>
        </div>
      </footer>
<!-- JavaScript -->
<script src="js/script.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>