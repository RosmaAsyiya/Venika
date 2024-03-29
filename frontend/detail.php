<?php
session_start();
    include '../database/connection.php';
    include '../search.php';

    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $id = parse_url($actual_link, PHP_URL_QUERY);
    $id_user = $_SESSION['id'];
    $_GET['id'] = $id;
    $id_vendor = substr($id,0,1);
    $id_jenis = substr($id,2);


    $sql = mysqli_query($koneksi,
    "SELECT * FROM vendor, jenis_layanan WHERE vendor.id = jenis_layanan.id_vendor
    AND vendor.id = '$id' AND jenis_layanan.id = '$id_jenis'");

    $cek = mysqli_fetch_assoc($sql);
    $nama = $cek["nama"];
    $nama_layanan = $cek["nama_layanan"];
    $deskripsi = $cek["deskripsi"];
    $fasilitas = $cek["fasilitas"];
    $variasi = $cek["variasi"];
    $no_hp = $cek["no_hp"];
    $instagram = $cek["instagram"];
    $facebook = $cek["facebook"];
    $twitter = $cek["twitter"];
    $website = $cek["website"];

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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style_nav_login.css">
    <link rel="stylesheet" href="css/det3.css">

    <!-- Style Responsive -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <!-- Font Awesome -->
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
                            <a href="../login/logout.php">
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

        <a href="../login.php"><button class="btn_register">Register</button></a>
          <a href="../login.php"><button class="btn_login">Login</button></a>
        </div>
      </div>
    </div>
  </nav>

<?php
  }
?>


    <div id="menu-btn" class=""></div>

    <!-- Prodcuts -->

    <section class="products" id="products">

        <!-- <h1 class="heading"> our <span>products</span> </h1> -->

        <?php echo '<h1 class="heading">'. $nama .'</h1>'; ?>

        <div class="swiper products-slider">

            <div class="swiper-wrapper">
              <?php
                $sql = mysqli_query($koneksi,
                "SELECT galeri_jenis_layanan.galeri from galeri_jenis_layanan, jenis_layanan, vendor
                WHERE vendor.id = '$id_vendor' AND jenis_layanan.id = '$id_jenis'
                AND  galeri_jenis_layanan.id_vendor = vendor.id AND galeri_jenis_layanan.id_jenis = jenis_layanan.id");
                while($cek = mysqli_fetch_assoc($sql)){
                  $galeri = $cek["galeri"];
              ?>

                <div class="swiper-slide slide">
                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($galeri) . '"alt="">'; ?>
                    <!-- <h3>Paket A</h3> -->
                    <!-- <div class="btn" data-product="product-1">lihat detail</div> -->
                </div>
                <?php } ?>
            </div>
            <!-- <p>Swipe<i class="fa-solid fa-arrow-right"></i></p>   -->
        </div>

    </section>


    <!-- Product Preview  -->

    <section class="products-preview-container">

        <!-- <div class="product-preview" data-target="product-1">
      <div class="fas fa-times"></div>
      <div class="image">
        <img src="img/mawar_katering.png" alt="">
      </div>
      <div class="content">
        <h3>Paket A</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas eligendi, corporis sed culpa assumenda
          odio ullam itaque porro facere quaerat!</p>
        <ul>
          <li>Lorem, ipsum dolor.</li>
          <li>Lorem, ipsum dolor.</li>
        </ul>
      </div>
    </div> -->

    </section>


    <!-- Detail Vendor -->

    <section class="detail" id="detail">
        <div class="product-content">
            <?php echo '<h2 class="product-title">Detail Layanan ' . $nama_layanan . '</h2>' ?>
            <form action="tambah_favorit.php" method="POST">
            <?php echo '<input type="hidden" name="id_vendor" value="' . $id_vendor . '">'; ?>
            <?php echo '<input type="hidden" name="id_jenis" value="' . $id_jenis . '">';
            ?>
              <button type="submit" name="submit" class="btn_plus fa-solid fa-heart"> Favorit</button> <br>
            </form>

            <!-- <div class = "product-rating">
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star-half-alt"></i>
                <span>4.7(21)</span>
              </div> -->

            <!-- <div class = "product-price">
                <p class = "last-price">Old Price: <span>$257.00</span></p>
                <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
              </div> -->

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tentang Vendor</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Fasilitas</button>
                    <button class="nav-link" id="nav-menu-tab" data-bs-toggle="tab" data-bs-target="#nav-menu"
                        type="button" role="tab" aria-controls="nav-menu" aria-selected="false">Menu</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Kontak</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <h2>Tentang Vendor</h2>
                <?php echo '<p>' . $deskripsi .' </p>'; ?>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <h2>Fasilitas</h2>
                <?php
                    echo $fasilitas;
                ?>
                </div>
                <div class="tab-pane fade" id="nav-menu" role="tabpanel" aria-labelledby="nav-menu-tab">
                    <h2>Pilihan Menu</h2>
                <?php
                    echo $variasi;
                ?>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <h2>Kontak</h2>
                <ul>
                    <li>No. HP : <a href="#" class="product-link"><?php echo $no_hp; ?></a></li>
                    <li>Instagram : <a href="#" class="product-link"><?php echo $instagram; ?></a></li>
                    <li>Facebook : <a href="#" class="product-link"><?php echo $facebook; ?></a></li>
                    <li>Twitter : <a href="#" class="product-link"><?php echo $twitter; ?></a></li>
                    <li>Website : <a href="#" class="product-link"><?php echo $website; ?></a></li>
                </ul>
                </div>
            </div>

            <!-- <div class="product-detail">
                <h2>Tentang Vendor</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quod commodi accusamus
                    necessitatibus alias
                    dolorem odit illum libero itaque dignissimos, omnis debitis enim voluptate deleniti ut saepe quos?
                    Ipsum,
                    laborum!</p>
                <h2>Fasilitas</h2>
                <ul>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>

                <h2>Pilihan Menu</h2>
                <ul>
                    <li>Paket A : <p>Prasmanan, Buffet</p>
                    </li>
                    <li>Paket B : <p>Pondok ala buffet</p>
                    </li>
                    <li>Desert : <p>Ice Cream, Kue, Buah (Melon, semangka, apel, anggur, pear), Rujak, Puding</p>
                    </li>
                    <li>Makanan Penutup : <p>Batagor, Siomay</p>
                    </li>
                </ul>

                <h2>Kontak</h2>
                <ul>
                    <li>Whatsapp : <a href="#" class="product-link">https://wa.me/628988325479</a></li>
                    <li>Instagram : <a href="#" class="product-link">https://www.instagram.com/mawar/</a></li>
                    <li>Website : <a href="#" class="product-link">https://www.mawar.com</a></li>
                </ul>
            </div> -->

            <!-- <div class = "purchase-info">
                <input type = "number" min = "0" value = "1">
                <button type = "button" class = "btn">
                  Add to Cart <i class = "fas fa-shopping-cart"></i>
                </button>
                <button type = "button" class = "btn">Compare</button>
              </div> -->

            <!-- <div class = "social-links">
                <p>Share At: </p>
                <a href = "#">
                  <i class = "fab fa-facebook-f"></i>
                </a>
                <a href = "#">
                  <i class = "fab fa-twitter"></i>
                </a>
                <a href = "#">
                  <i class = "fab fa-instagram"></i>
                </a>
                <a href = "#">
                  <i class = "fab fa-whatsapp"></i>
                </a>
                <a href = "#">
                  <i class = "fab fa-pinterest"></i>
                </a>
              </div> -->
        </div>
    </section>

    <!-- Form Pemesanan -->

    <section class="order" id="order">

        <div class="heading">
            <h2>Form Pemesanan</h2>
            <!-- <h3>fast home delivery</h3> -->
        </div>

        <form action="../booking.php" method="POST">
            <div class="box-container">
                <div class="box">
                    <div class="inputBox">
                        <label for="validationCustom01">Nama</label>
                        <input type="text" name="nama" placeholder="masukkan nama anda" id="validationDefault01" required>
                    </div>
                    <div class="inputBox">
                        <label for="validationCustom02">Nomor Telephone</label>
                        <input type="text" name="no_hp" placeholder="masukkan nomor telepon" id="validationDefault02" required>
                    </div>
                    <div class="inputBox">
                        <label for="validationCustom03">Tanggal Booking</label>
                        <input type="date" name="tanggal" id="validationDefault03" required>
                    </div>
                    <div class="inputBox">
                        <?php echo '<input type="hidden" name="id" value="' . $_GET['id'] . '">'; ?>
                    </div>
                    <!-- <div class="inputBox">
                        <label for="">Alamat</label>
                        <textarea name="" placeholder="masukkan alamat" id="" cols="30" rows="10"></textarea>
                    </div> -->
                </div>
                <div class="box">
                    <div class="inputBox">
                      <label for="validationCustom04">Jenis Layanan</label>
                      <select name="jenis_layanan" class="form-select" aria-label="Default select example" id="validationDefault03" required>
                        <option value="">Pilih Jenis Layanan</option>
                        <option value="Dekorasi">Dekorasi</option>
                        <option value="Foto & Video">Foto & Video</option>
                        <option value="Gaun Pengantin">Gaun Pengantin</option>
                        <option value="Gedung">Gedung</option>
                        <option value="Katering">Katering</option>
                        <option value="Makeup">Makeup</option>
                        <option value="MC">MC</option>
                        <option value="Band">Music Band</option>
                        <option value="Sewa Mobil">Sewa Mobil</option>
                        <option value="Sound System">Sound System</option>
                      </select>
                    </div>
                    <div class="inputBox">
                        <label for="validationDefault05">Variasi Layanan</label>
                        <textarea name="paket" placeholder="Variasi/Paket/Nama Layanan yang dipilih" id="" cols="30" rows="10" id="validationDefault05" required></textarea>
                        <!-- <input type="text" placeholder="paket yang dipilih"> -->
                    </div>
                    <!-- <div class="inputBox">
                        <label for="">Jumlah Porsi</label>
                        <input type="number" placeholder="masukkan jumlah porsi">
                    </div> -->
                    <!-- <div class="inputBox">
                        <label for="">Detail Pesan</label>
                        <textarea name="" placeholder="masukkan detail pesanan" id="" cols="30" rows="10"></textarea>
                    </div> -->
                    <!-- <div class="inputBox">
                <span>our address</span>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60307.59083109428!2d72.840725!3d19.141651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1642222128240!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
             </div> -->
                </div>
            </div>
            <input type="submit" name="booking" value="Pesan" class="btn_pesan">
        </form>

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


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="js/det.js"></script>
    <script src="js/script.js"></script>

    <!-- Swiper JS -->
    <!-- <script src="js/swiper-bundle.min.js"></script> -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

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