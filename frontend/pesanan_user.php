<?php
session_start();

include '../database/connection.php';

$id = $_SESSION['id'];

if (!isset($_SESSION['is_login'])) {
    echo "<script>document.location.href='../login_vendor.php';</script>";
    die();
}

if ($_SESSION['tipe'] != "user"){
    echo "<script>document.location.href='../index.php';</script>";
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
                <a href="dashboard_user.php" class="nav-link">
                    <i class="fa-solid fa-user icon"></i>
                    Profil
                </a>
            </li>
            <li>
                <a href="favorit.php" class="nav-link">
                    <i class="fa-solid fa-heart icon"></i>
                    Favorit Saya
                </a>
            </li>
            <li>
                <a href="pesanan_user.php" class="active">
                    <i class="fa-solid fa-cart-shopping icon"></i>
                    Pesanan Saya
                </a>
            </li>
            <li>
            <li>
                <a href="login_vendor.php" class="nav-link">
                    <i class="fa-solid fa-right-from-bracket icon"></i>
                    Keluar
                </a>
            </li>
        </ul>

        <!-- Footer -->
		<div class="ads">
			<div class="wrapper footer_dashboard_user">
				<ul class="fast_link">
					<li>Kontak</li>
					<li>Vendor</li>
					<li>Tentang Kami</li>
					<li>FAQ</li>
				  </ul>

				<p>Copyright &copy;2022 Venika | designed by <span>Venika</span></p>
			</div>
		</div>
    </section>


        <!-- NAVBAR -->
    <section id="content">

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
                                                        <?php
                                                        $sql = mysqli_query($koneksi,
                                                        "SELECT photo From user WHERE id = '$id'");
                                                        while ($cek = mysqli_fetch_assoc($sql)){
                                                            $photo = $cek['photo'];

                                                        ?>
                                                        <?php echo '<img src="../photo/' . $photo . '" class="img-radius"
                                                            alt="User-Profile-Image">';} ?>
                                                            <?php echo' <span>' . $_SESSION['username'] . '</span>';?>
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
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Pesanan Saya</h1>
					<ul class="breadcrumb">
						<li>
							<a href="pesanan_user.php">Detail Pesanan</a>
						</li>
						<li>
					</ul>
				</div>
			</div>

			<!-- Tabel Data Pesanan -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Permintaan Pesanan</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Nama</th>
								<th>Telephone</th>
								<th>Tgl Booking</th>
								<th>Layanan</th>
								<th>Produk/Jasa</th>
								<th>Status</th>
								<!-- <th>Catatan</th> -->
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = mysqli_query($koneksi,
							"SELECT * FROM booking WHERE id_user = '$id' AND status = '0' or status = '3'");
							while ($cek = mysqli_fetch_assoc($sql)){
							$nama = $cek['nama'];
							$no_hp = $cek['no_hp'];
							$tanggal = $cek['tanggal'];
							$jenis_layanan = $cek['jenis_layanan'];
							$paket = $cek['paket'];
							$status = $cek['status'];



							?>
							<tr>
								<td>
									<?php echo '<p>' . $nama . '</p>'; ?>
								</td>
								<?php echo '<td>' . $no_hp . '</td>';
								echo '<td>' . $tanggal . '</td>';
								echo '<td>' . $tanggal . '</td>';
								echo '<td>' . $paket . '</td>'; ?>
								<td>
									<?php
									switch($status){
										case "0":
											echo '<span class="status pending">Pending</span>';
											break;
										case "3":
											echo '<span class="status ditolak">Ditolak</span>';
											break;
									} ?>
								</td>

								<!-- <td>
									Akan di roses
								</td> -->
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>

			</div>

            <!-- Tabel Data Pesanan -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Riwayat Pesanan</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Nama</th>
								<th>Telephone</th>
								<th>Tgl Booking</th>
								<th>Layanan</th>
								<th>Produk/Jasa</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = mysqli_query($koneksi,
							"SELECT * FROM booking where id = '$id' AND status = '1' or status = '2'");
							while ($cek = mysqli_fetch_assoc($sql)){
								$nama = $cek['nama'];
								$no_hp = $cek['no_hp'];
								$tanggal = $cek['tanggal'];
								$jenis_layanan = $cek['jenis_layanan'];
								$paket = $cek['paket'];
								$status = $cek['status'];



								?>
								<tr>
									<td>
										<?php echo '<p>' . $nama . '</p>'; ?>
									</td>
									<?php echo '<td>' . $no_hp . '</td>';
									echo '<td>' . $tanggal . '</td>';
									echo '<td>' . $tanggal . '</td>';
									echo '<td>' . $paket . '</td>'; ?>
									<td>
										<?php
										switch($status){
											case "1":
												echo '<span class="status proses">Process</span>';
												break;
											case "3":
												echo '<span class="status selesai">Completed</span>';
												break;
										} ?>
									</td>
									<!-- <td>
										Akan di roses
									</td> -->
								</tr>
								<?php } ?>
						</tbody>
					</table>
				</div>

			</div>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->


	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="js/dashboard_vendor.js"></script>

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