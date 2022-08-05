<?php
session_start();

include '../database/connection.php';
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
    <link rel="stylesheet" href="css/tentang_kami.css">
    <link rel="stylesheet" href="css/style_nav_login.css">

    <!-- Style Responsive -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

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
            <a class="nav-link active" aria-current="page" href="../index.php">Beranda</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="../index.php?#kategori">Vendor</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="tentang_kami.php">Tentang Kami</a>
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
                              <?php echo '<img src="../photo/' . $photo . '" class="img-radius"
                                  alt="User-Profile-Image">';}}
                        if($_SESSION['tipe'] == 'vendor'){
                          $sql = mysqli_query($koneksi,
                              "SELECT photo From vendor WHERE id = '$id'");
                              while ($cek = mysqli_fetch_assoc($sql)){
                                  $photo = $cek['photo'];

                              ?>
                              <?php echo '<img src="../photo/' . $photo . '" class="img-radius"
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
                            <a href="faq.php">
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

            <a class="nav-link active" aria-current="page" href="../index.php">Beranda</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="../index.php?#kategori">Vendor</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="tentang_kami.php">Tentang Kami</a>
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
                    <img src="img/bg_aboutus3.jpg" alt="" class="position-absolute end-0 bottom-0 img-hero">
                    <h1>Tentang Kami</h1>
                </div>
            </div>
        </div>
    </section>


    <!-- Tentang Kami -->

    <section id="tentang_kami">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2>TENTANG KAMI</h2>
                </div>
                <div class="right">
                    <img src="img/1.jpg" alt="">
                    <div class="features">
                        <h3>Venika</h3>
                        <p>Venika adalah platform digital yang menyediakan layanan informasi vendor kebutuhan pernikahan
                            di daerah Semarang dan sekitarnya. Calon pengantin dapat melihat dan membandingkan antara
                            vendor sehingga dapat menentukan vendor mana yang terbaik untuk digunakan pada acara
                            pernikahannya. Selian itu calon pengantin juga dapat mengajukan pesanan kepada vendor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->

    <section id="kategori">
        <div class="container position-relative mx-auto">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>KONTAK</h2>
                </div>
                <div class="kontak_venika">
                    <div class="col-auto text-center">
                        <div class="col-md-3">
                            <a href="https://wa.me/628988325479?text=Saya%20tertarik%20dengan%20layanan%20vendor%20yang%20dijual">
                                <div class="card-kategori">
                                    <div class="circle-icon ">
                                        <i class="fa-brands fa-square-whatsapp"></i>
                                        <h4 class="wa">WhatsApp</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-auto text-center">
                        <div class="col-md-3">
                            <a href="https://www.instagram.com/venika_id/">
                                <div class="card-kategori">
                                    <div class="circle-icon ">
                                        <i class="fa-brands fa-square-instagram"></i>
                                        <h4 class="ig">Instagram</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-auto text-center">
                        <div class="col-md-3">
                            <a href="mailto:venikaid@gmail.com">
                                <div class="card-kategori">
                                    <div class="circle-icon ">
                                        <i class="fa-solid fa-square-envelope"></i>
                                        <h4 class="email">Email</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

    </section>



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

    <!-- JavaScript -->
    <script src="js/script.js"></script>

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