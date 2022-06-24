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
    <title>Venika</title>
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-fixed w-100">
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
          <img src="img/hero3.png" alt="" class="position-absolute end-0 bottom-0">
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

      <!-- <section id="kategori">
        <div class="container position-relative mx-auto">
          <div class="row">
            <div class="col-12 text-center">
              <div class="col-md-3">
                <div class="card-kategori">
                  <div class="circle-icon ">
                    <img src="img/icon_sound.png" alt="">
                    <h4>Sound System</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      
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

      

      



      <!-- <section class="testimoni" id="testimoni">

        <div class="wrap">
          <span id="right-arrow" class="arrow right fa fa-chevron-right "><span>
          <span id="left-arrow" class="arrow left fa fa-chevron-left "><span>
          
          <ul class="dots" id="testimoni-dots">
            <li class="dot active"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
          </ul>

          <div class="content" id="testimoni-content">
            <div class="active">
              <div class="img">
                <img src="img/bg.jpg">
              </div>
              <h2>Lorem N. Ipsum</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, distinctio?</p>
            </div>

            <div class="active">
              <div class="img">
                <img src="img/bg.jpg">
              </div>
              <h2>Lorem N. Ipsum</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, distinctio?</p>
            </div>

            <div class="active">
              <div class="img">
                <img src="img/bg.jpg">
              </div>
              <h2>Lorem N. Ipsum</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, distinctio?</p>
            </div>
          </div>
        </div>
      </section> -->

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