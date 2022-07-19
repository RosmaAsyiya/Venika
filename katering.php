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
    <link rel="stylesheet" href="css/katering.css">

    <!-- Style Responsive -->
    <link rel="stylesheet" href="css/responsive.css">

    <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous">
    </script>

    <!-- Swiper CSS -->
    <!-- <link rel="stylesheet" href="css/swiper-bundle.min.css"> -->

    <!-- Style Swiper CSS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <title>Venika</title>
  </head>
  <body>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <!-- Icon Navbar -->
          <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top" me-3>Venika</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <!-- mx : margin pd sumbu x -->
              <li class="nav-item mx-3">
                  <!-- nav menu yg aktif -->
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Vendor</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Tentang Kami</a>
              </li>
            </ul>
            <!-- Button -->
            <div>
                <!-- <a class="btn btn-primary" href="index.php" role="button">Daftar</a>
                <a class="btn btn-primary" href="index.php" role="button">Masuk</a> -->
                <button class="btn_transparent" href="index.php">Daftar</button>
                <button class="btn_primary" href="index.php">Masuk</button>
            </div>
          </div>
        </div>
      </nav>

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
      
      <!-- SEARCH SECTION -->
      
      <section id="search">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <!-- <h2>VENDOR</h2> -->
            </div>
          </div>

          <div class="col-10 mx-auto rectangle">
            <div class="row">
              <div class="col-auto">
                <input type="text" class="form-control" placeholder="Cari nama vendor..." aria-label="Cari nama vendor">
              </div>
              <div class="col-auto">
                <button class="btn_dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <!-- <img src="img/icon_filter.png" alt=""> -->
                  All Categories
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
              </div>
              <div class="col-auto">
                <button class="btn_search" type="button" id="button-addon2">Search</button>
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