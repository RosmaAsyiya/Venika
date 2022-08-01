<?php
session_start();

include '../database/connection.php';

$id = $_SESSION['id'];

if (!isset($_SESSION['is_login'])) {
    echo "<script>document.location.href='../login_vendor.php';</script>";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'> -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/dashboard_vendor.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3709d60cb3.js" crossorigin="anonymous"></script>

    <title>Venika</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="index.html" class="brand">
            <i class="fa-brands fa-slack icon"></i>
            Venika
        </a>
        <ul class="side-menu">
            <li>
                <a href="dashboard_vendor.php" class="nav-link">
                    <i class="fa-solid fa-house-chimney icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="divider" data-text="main">Main</li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-folder-plus icon"></i>
                    Data Vendor
                    <i class="fa-solid fa-angle-right icon-right"></i>
                </a>
                <ul class="side-dropdown">
                    <li><a href="kategori_layanan_vendor.php"><i class="fa-solid fa-eye icon"></i> Lihat Data</a></li>
                    <li><a href="tambah_data_vendor.html"><i class="fa-solid fa-file-circle-plus icon"></i> Tambah
                            Data</a></li>
                </ul>
            </li>
            <li>
                <a href="data_pesanan.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping icon"></i>
                    Pesanan
                    <i class="fa-solid fa-angle-right icon-right"></i>
                </a>
                <ul class="side-dropdown">
                    <li><a href="req_pesanan.php"><i class="fa-solid fa-user-clock icon"></i> Permintaan Pesanan</a>
                    </li>
                    <li><a href="data_pesanan.php"><i class="fa-solid fa-clipboard-list icon"></i> Data Pesanan</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="pengaturan.php" class="active">
                    <i class="fa-solid fa-gear icon"></i>
                    Pengaturan
                </a>
            </li>
            <li>
                <a href="login_vendor.php" class="nav-link">
                    <i class="fa-solid fa-right-from-bracket icon"></i>
                    Keluar
                </a>
            </li>
        </ul>
    </section>

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        <!-- <nav>
			<i class="fa-solid fa-bars toggle-sidebar"></i>

			<form action="#">
				
			</form>
			
			<span class="divider"></span>

			<div class="profile">
				<div>
				<a href="#!" class="profile-dropdown">
					<img src="img/bg.jpg" alt="">
					<span>Rosma Asiyya</span>
					<i class="fa-solid fa-angle-down icon"></i>
				</a>
			</div>

				<ul class="profile-link">
					<li><a href="#"><i class="fas fa-user"></i> Lihat Profil</a></li>
					<li><a href="#"><i class="fas fa-question"></i> FAQ</a></li>
					<li><a href="#"><i class="fas fa-arrow-right-from-bracket"></i> Keluar</a></li>
				</ul>
			</div>
		</nav> -->
        <!-- NAVBAR -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <i class="fa-solid fa-bars toggle-sidebar"></i>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">

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
                                                        <img src="img/circle-user-solid.svg" class="img-radius"
                                                            alt="User-Profile-Image">
                                                        <span>Rosma Asiyya</span>
                                                        <i class="fa-solid fa-angle-down"></i>
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
                                                            <a href="#">
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
                        <script src="js/script.js"></script>
                        <script type="text/javascript" src="js/jquery.min.js"></script>

                        <script src="js/pcoded.min.js"></script>
                        <script src="js/vertical-layout.min.js"></script>
                        <script type="text/javascript" src="js/user_profile.js"></script>
                    </div>
                </div>
            </div>
        </nav>


        <!-- MAIN -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Pengaturan</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Pengaturan</a>
                        </li>
                        <li><i class="fa-solid fa-angle-right"></i></li>
                        <li>
                            <a class="active" href="#">Edit Profile</a>
                        </li>
                    </ul>
                </div>
                <!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
            </div>

            <div class="edit_foto">
                <h3 class="head_profile">Pilih Foto Profil</h3>
            <div class="profile-pic-div">
                <img src="img/circle-user-solid.svg" id="photo">
                <input type="file" id="file">
                <label for="file" id="uploadBtn">
                    <i class="fa-solid fa-camera icon_btn"></i> <br>
                    Pilih Foto</label>
              </div>
              
            </div>

              <script src="js/profil.js"></script>
              

            <!-- Form Edit -->

            <section class="order" id="order">

                <div class="heading">
                    <!-- <h2>Edit Profile</h2> -->
                    <!-- <h3>fast home delivery</h3> -->
                </div>

                <h3 class="head_profile">Informasi Akun</h3>

                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM vendor WHERE id = '$id'");
                $cek = mysqli_fetch_assoc($sql);
                $nama = $cek['nama'];
                $user = $cek['username'];
                $email = $cek['email'];
                $no_hp = $cek['no_hp'];
                $alamat = $cek['alamat'];
                // $pass = $cek['password'];

                ?>
                <form action="update_vendor.php" method="POST">
                    <div class="box-container">
                        <div class="box">
                            <div class="inputBox">
                                <label for="validationCustom01">Nama Vendor</label>
                                <?php echo '<input type="text" name="nama" placeholder="" value="' . $nama . '" id="validationDefault01" required>'; ?>
                            </div>
                            <div class="inputBox">
                                <label for="validationCustom01">Username</label>
                                <?php echo '<input type="text" name="username" placeholder="" value="' . $user . '" id="validationDefault01" required>'; ?>
                            </div>
                            <div class="inputBox">
                                <label for="validationCustom01">Email</label>
                                <?php echo '<input type="text" name="email" placeholder="" value="' . $email . '"  id="validationDefault01" required>'; ?>
                            </div>
                            
                        </div>
                        <div class="box">
                            <div class="inputBox">
                                <label for="validationCustom02">Nomor Telephone</label>
                                <?php echo '<input type="text" name="no_hp" placeholder="Nomor Telephone Kosong" value="' . $no_hp .'" id="validationDefault02" required>'; ?>
                            </div>
                            <div class="inputBox">
                                <label for="validationCustom02">Alamat</label>
                                <?php echo '<input type="text" name="alamat" placeholder="Alamat Kosong" value="' . $alamat . '" id="validationDefault02" required>'; ?>
                            </div>
                            <!-- <div class="inputBox">
                                <label for="validationCustom02">Password</label>
                                 echo '<input type="password" placeholder="" value=' . $pass' id="validationDefault02" required>';  -->
                            </div> 
                        </div>
                    </div>
                    <input type="submit" value="Simpan" class="btn_simpan">
                </form>

            </section>



        </main>
        <!-- MAIN -->
    </section>
    <!-- NAVBAR -->


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/dashboard_vendor.js"></script>
</body>

</html>