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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style_landing_page.css">

    <!-- Style Responsive -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- Style Swiper CSS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <title>Venika</title>
  </head>
  <body>
      <!-- Navbar -->
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
                <a class="btn btn-primary" href="index.php" role="button">Daftar</a>
                <a class="btn btn-primary" href="index.php" role="button">Masuk</a>
                <!-- <button class="btn_transparent">Daftar</button>
                <button class="btn_primary">Masuk</button> -->
            </div>
          </div>
        </div>
      </nav>

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

      <!-- Kategori Section -->

      <section id="kategori">
        <div class="container position-relative mx-auto">
          <div class="row">
            <div class="col-auto text-center">
              <div class="col-md-3">
                <div class="card-kategori">
                  <div class="circle-icon ">
                    <img src="img/icon_sound.png" alt="">
                    <h4>Dekorasi</h4>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-auto text-center">
              <div class="col-md-3">
                <div class="card-kategori">
                  <div class="circle-icon ">
                    <img src="img/icon_sound.png" alt="">
                    <h4>Katering</h4>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-auto text-center">
              <div class="col-md-3">
                <div class="card-kategori">
                  <div class="circle-icon ">
                    <img src="img/icon_sound.png" alt="">
                    <h4>Makeup</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto text-center">
              <div class="col-md-3">
                <div class="card-kategori">
                  <div class="circle-icon ">
                    <img src="img/icon_sound.png" alt="">
                    <h4>Sound System</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto text-center">
              <div class="col-md-3">
                <div class="card-kategori">
                  <div class="circle-icon ">
                    <img src="img/icon_sound.png" alt="">
                    <h4>Gedung Pernikahan</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto text-center">
              <div class="col-md-3">
                <div class="card-kategori">
                  <div class="circle-icon ">
                    <img src="img/icon_sound.png" alt="">
                    <h4>Foto & Video</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto text-center">
              <div class="col-md-3">
                <div class="card-kategori">
                  <div class="circle-icon ">
                    <img src="img/icon_sound.png" alt="">
                    <h4>Sewa Mobil</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto text-center">
              <div class="col-md-3">
                <div class="card-kategori">
                  <div class="circle-icon ">
                    <img src="img/icon_sound.png" alt="">
                    <h4>Gaun Pengantin</h4>
                  </div>
                </div>
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
                <p>Pernikahan adalah acara sakral yang dilakukan oleh 2 orang yang saling mencintai satu sama lain. Setiap pasangan menginginkan acara pernikahannya berjalan dengan lancar sesuai apa yang diharapkan.</p>
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
                              <img src="" alt="" class="card-img">
                          </div>
                      </div>

                      <div class="card-content">
                          <h3 class="name">Muhammad Sultan Rafi</h3>
                          <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

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
                          <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repellendus ducimus id dicta! Nemo delectus neque accusantium autem saepe enim!</p>

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
          <p>Copyright &copy;2022 Venika. designed by <span>Venika</span></p>
        </div>
      </footer>


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