<?php
session_start();

include 'database/connection.php';
if (isset($_SESSION['id'])){
$id = $_SESSION['id'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Style CSS -->
  <link rel="stylesheet" href="frontend/css/style_landing_page.css">
  <link rel="stylesheet" href="frontend/css/style_nav_login.css">

  <!-- Style Responsive -->
  <link rel="stylesheet" href="frontend/css/responsive.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="frontend/css/swiper-bundle.min.css">

  <!-- Style Swiper CSS-->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Font Awesome -->
  <!-- <script
    src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
  </script> -->
  <script src="https://kit.fontawesome.com/3709d60cb3.js" crossorigin="anonymous"></script>
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
            <a class="nav-link" href="#kategori">Vendor</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="frontend/tentang_kami.php">Tentang Kami</a>
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
                        <a href="#!" class="arrowdown">
                        <?php
                        if($_SESSION['tipe'] == 'user'){
                              $sql = mysqli_query($koneksi,
                              "SELECT photo From user WHERE id = '$id'");
                              while ($cek = mysqli_fetch_assoc($sql)){
                                  $photo = $cek['photo'];

                              ?>
                              <?php echo '<img src="photo/' . $photo . '" class="img-radius"
                                  alt="User-Profile-Image">';}}
                        if($_SESSION['tipe'] == 'vendor'){
                          $sql = mysqli_query($koneksi,
                              "SELECT photo From vendor WHERE id = '$id'");
                              while ($cek = mysqli_fetch_assoc($sql)){
                                  $photo = $cek['photo'];

                              ?>
                              <?php echo '<img src="photo/' . $photo . '" class="img-radius"
                                  alt="User-Profile-Image">';}
                        } ?>
                          <?php echo' <span>' . $_SESSION['username'] . '</span> ';?>
                          <i class="fas fa-angle-down toggle"></i>
                        </a>
                        <ul class="show-notification profile-notification">
                          <li class="">
                            <?php
                            if($_SESSION['tipe'] == "user"){
                            ?>
                            <a href="dashboard_user.php">
                              <i class="fas fa-user"></i> Lihat Profil
                            </a>
                            <?php }
                            else{?>
                            <a href="dashboard_vendor.php">
                              <i class="fas fa-user"></i> Lihat Profil
                            </a>
                            <?php }?>
                          </li>
                          <li class="">
                            <a href="frontend/faq.php">
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
            <a class="nav-link" href="#kategori">Vendor</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="frontend/tentang_kami.php">Tentang Kami</a>
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


  <!-- Hero Section -->
  <section id="hero">
    <!-- h-100 : height agar memenuhi layar -->
    <div class="container" h-100>
      <div class="row" h-100>
        <div class="col-md-6 hero-tagline my-auto">
          <h1>Membantu anda mendapatkan vendor terbaik !</h1>
          <p>Mencari vendor pernikahan kini lebih mudah melalui <span class="fw-bold">Venika</span></p>
          <button class="btn_cari_sekarang">Cari sekarang...</button>
        </div>
      </div>
      <img src="img/hero.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
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

      <form action="hasil.php" method="GET">
      <div class="col-10 mx-auto rectangle">
        <div class="row">
          <div class="col-auto">
            <input value="" type="text" class="form-control" name="nama_vendor" placeholder="Cari vendor..." aria-label="Cari vendor">
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
              <option selected class="option" value="">Jenis Layanan</option>
              <option class="option" value="Dekorasi">Dekorasi</option>
              <option class="option" value="Katering">Katering</option>
              <option class="option" value="Makeup">Makeup</option>
              <option class="option" value="SoundSystem">Sound System</option>
              <option class="option" value="MusicBand">Music Band</option>
              <option class="option" value="Gedung">Gedung</option>
              <option class="option" value="FotoVideo">Foto & Video</option>
              <option class="option" value="SewaMobil">Sewa Mobil</option>
              <option class="option" value="GaunPengantin">Gaun Pengantin</option>
              <option class="option" value="MC">MC</option>
            </select>
          </div>

          <!-- Filter Lokasi -->
          <div class="col-auto ">
            <select name="lokasi" class="form-select" id="inputGroupSelect01">
              <option selected class="option" value="">Lokasi</option>
              <option class="option" value="Banyumanik">Banyumanik</option>
              <option class="option" value="Candisari">Candisari</option>
              <option class="option" value="Gajahmungkur">Gajahmungkur</option>
              <option class="option" value="Gayamsari">Gayamsari</option>
              <option class="option" value="Genuk">Genuk</option>
              <option class="option" value="Gunungpati">Gunungpati</option>
              <option class="option" value="Mijen">Mijen</option>
              <option class="option" value="Ngaliyan">Ngaliyan</option>
              <option class="option" value="Pedurungan">Pedurungan</option>
              <option class="option" value="SemarangBarat">Semarang Barat</option>
              <option class="option" value="SemarangSelatan">Semarang Selatan</option>
              <option class="option" value="Semarang Tengah">Semarang Tengah</option>
              <option class="option" value="SemarangUtara">Semarang Utara</option>
              <option class="option" value="Tembalang">Tembalang</option>
              <option class="option" value="Tugu">Tugu</option>
            </select>
          </div>

          <!-- Filter Adat -->
          <div class="col-auto filter_adat">
            <select name="adat" class="form-select" id="inputGroupSelect01">
              <option selected class="option" value="">Adat</option>
              <option class="option" value="Bali">Bali</option>
              <option class="option" value="Batak">Batak</option>
              <option class="option" value="Betawi">Betawi</option>
              <option class="option" value="Eropa">Eropa</option>
              <option class="option" value="Jawa">Jawa</option>
              <option class="option" value="Melayu">Melayu</option>
              <option class="option" value="Sunda">Sunda</option>
            </select>
          </div>

          <!-- Button Cari -->
          <div class="col-auto">
            <button name="search" class="btn_search" type="submit" id="button-addon2">Cari</button>
          </div>
        </div>
      </div>
      </form>

    </div>
  </section>

  <!-- Kategori Section -->

  <section id="kategori">
    <div class="container position-relative mx-auto">
      <div class="row">
        <div class="col-auto text-center">
          <div class="col-md-3">
            <a href="frontend/dekorasi.php"><div class="card-kategori">
              <div class="circle-icon ">
                <i class="fa-solid fa-paint-roller"></i>
                <h4>Dekorasi</h4>
              </div>
            </div></a>
          </div>
        </div>

        <div class="col-auto text-center">
          <div class="col-md-3">
          <a href="frontend/katering.php"><div class="card-kategori">
              <div class="circle-icon ">
                <i class="fa-solid fa-cake-candles"></i>
                <!-- <i class="fa-solid fa-bell-concierge"></i> -->
                <h4>Katering</h4>
              </div>
            </div></a>
          </div>
        </div>

        <div class="col-auto text-center">
          <div class="col-md-3">
          <a href="frontend/makeup.php"><div class="card-kategori">
              <div class="circle-icon ">
                <i class="fa-solid fa-paintbrush"></i>
                <h4>Makeup</h4>
              </div>
            </div></a>
          </div>
        </div>

        <div class="col-auto text-center">
          <div class="col-md-3">
          <a href="frontend/SoundSystem.php"><div class="card-kategori">
              <div class="circle-icon ">
                <!-- <img src="img/icon_sound.png" alt=""> -->
                <!-- <i class="fa-brands fa-soundcloud"></i> -->
                <i class="fa-solid fa-volume-high"></i>
                <!-- <i class="fa-solid fa-square-poll-vertical"></i> -->
                <h4>Sound System</h4>
              </div>
            </div></a>
          </div>
        </div>

        <div class="col-auto text-center">
          <div class="col-md-3">
          <a href="frontend/Musicband.php"><div class="card-kategori">
              <div class="circle-icon ">
                <i class="fa-solid fa-music"></i>
                <h4>Music Band</h4>
              </div>
            </div></a>
          </div>
        </div>

        <div class="col-auto text-center">
          <div class="col-md-3">
          <a href="frontend/Gedung.php"><div class="card-kategori">
              <div class="circle-icon ">
                <i class="fa-solid fa-landmark-dome"></i>
                <h4>Gedung Pernikahan</h4>
              </div>
            </div></a>
          </div>
        </div>

        <div class="col-auto text-center">
          <div class="col-md-3">
          <a href="frontend/fotovideo.php"><div class="card-kategori">
              <div class="circle-icon ">
                <i class="fa-solid fa-camera"></i>
                <h4>Foto & Video</h4>
              </div>
            </div></a>
          </div>
        </div>

        <div class="col-auto text-center">
          <div class="col-md-3">
          <a href="frontend/sewamobil.php"><div class="card-kategori">
              <div class="circle-icon ">
                <i class="fa-solid fa-car"></i>
                <h4>Sewa Mobil</h4>
              </div>
            </div></a>
          </div>
        </div>

        <div class="col-auto text-center">
          <div class="col-md-3">
          <a href="frontend/gaunpengantin.php"><div class="card-kategori">
              <div class="circle-icon ">
                <i class="fa-brands fa-black-tie"></i>
                <h4>Gaun Pengantin</h4>
              </div>
            </div></a>
          </div>
        </div>

        <div class="col-auto text-center">
          <div class="col-md-3">
          <a href="frontend/mc.php"><div class="card-kategori">
              <div class="circle-icon ">
                <i class="fa-solid fa-user-tie"></i>
                <h4>MC</h4>
              </div>
            </div></a>
          </div>
        </div>
  </section>

  <!-- Inspirasi Pernikahan -->

  <section id="inspirasi_nikah">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <h2>TIPS PERNIKAHAN</h2>
        </div>
        <div class="right">
          <img src="img/wedding_background.jpg" alt="">
          <div class="features">
            <h3>Tips & Trik Pernikahan</h3>
            <p>Pernikahan adalah acara sakral yang dilakukan oleh 2 orang yang saling mencintai satu sama lain. Setiap
              pasangan menginginkan acara pernikahannya berjalan dengan lancar sesuai apa yang diharapkan.</p>
            <a href="#" class="btn_learnmore">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION TESTIMONI -->

  <section id="testimoni">
    <div class="slide-container swiper">
      <div class="slide-content arrow bullet">
        <h2 class="text-center">TESTIMONI</h2>
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="img/sultan.jpeg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h3 class="name">Muhammad Sultan Rafi</h3>
              <p class="description">The lorem text the section that contains header with having open functionality.
                Lorem dolor sit amet consectetur adipisicing elit.</p>

              <!-- <button class="button">View More</button> -->
            </div>
          </div>

          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                <img src="img/bg.jpg" alt="" class="card-img">
              </div>
            </div>

            <div class="card-content">
              <h3 class="name">Rosma Khoirul Asiyya</h3>
              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repellendus
                ducimus id dicta! Nemo delectus neque accusantium autem saepe enim!</p>

              <!-- <button class="button">View More</button> -->
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- Swiper JS -->
  <script src="js/swiper-bundle.min.js"></script>

  <!-- JavaScript -->
  <script src="js/script.js"></script>

  <!-- Swiper JS -->
  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->


  <!-- FOOTER SECTION -->
  <footer class="bg">
    <div class="footer-content">
      <h3>Venika</h3>
      <p>Venika adalah platform digital yang menyediakan layanan informasi vendor kebutuhan di daerah Semarang dan
        sekitarnya.</p>
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


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>