<?php
session_start();

$id = $_SESSION['id'];

include '../database/connection.php';
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

	  <!-- Bootstrap CSS -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
	<!-- Font Google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

	
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
					<li><a href="data_vendor.html"><i class="fa-solid fa-eye icon"></i> Lihat Data</a></li>
                    <li><a href="tambah_data_vendor.html"><i class="fa-solid fa-file-circle-plus icon"></i> Tambah Data</a></li>
                </ul>
            </li>
            <li>
                <a href="req_pesanan.php" class="active">
                    <i class="fa-solid fa-cart-shopping icon"></i>
                    Pesanan
					<i class="fa-solid fa-angle-right icon-right"></i>
                </a>
				<ul class="side-dropdown">
                    <li><a href="req_pesanan.php"><i class="fa-solid fa-user-clock icon"></i> Permintaan Pesanan</a></li>
                    <li><a href="data_pesanan.php"><i class="fa-solid fa-clipboard-list icon"></i> Data Pesanan</a></li>
                </ul>
            </li>
			<li>
                <a href="pengaturan.php" class="nav-link">
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
														<img src="img/circle-user-solid.svg" class="img-radius" alt="User-Profile-Image">
														<?php echo' <span>' . $_SESSION['username'] . '</span> ';?>
														<i class="fas fa-angle-down toggle"></i>
														</a>
														<ul class="show-notification profile-notification">
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
					<h1>Permintaan Pesanan</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Pesanan</a>
						</li>
						<li><i class="fa-solid fa-angle-right"></i></li>
						<li>
							<a class="active" href="#">Permintaan Pesanan</a>
						</li>
					</ul>
				</div>
				
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>
			<!-- <button type="button" class="btn_tambahdata" id="btn-add" data-toggle="modal" data-target="#addDataModal">Tambah
				Data</button> -->
			<!-- <ul class="box-info">
				<li>
					<i class="fa-solid fa-users"></i>
					<span class="text">
						<h3>80</h3>
						<p>Total Pelanggan</p>
					</span>
				</li>
				<li>
					<i class="fa-solid fa-calendar-check"></i>
					<span class="text">
						<h3>84</h3>
						<p>Total Pesanan</p>
					</span>
				</li>
				<li>
					<i class="fa-solid fa-cart-arrow-down"></i>
					<span class="text">
						<h3>865</h3>
						<p>Total Penjualan</p>
					</span>
				</li>
			</ul> -->


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Pesanan Terbaru</h3>
						<!-- <i class="fa-solid fa-magnifying-glass"></i> -->
					</div>
					<table>
						<thead>
							<tr>
								<th>Nama</th>
								<th>Telephone</th>
								<th>Tgl Booking</th>
								<th>Layanan</th>
								<th>Variasi Layanan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<form action="process.php" method="POST">
						<?php
							// $id = $_SESSION['id'];
							$sql = mysqli_query($koneksi,
							"SELECT * FROM request_order WHERE id_vendor = '$id'");
							while ($cek = mysqli_fetch_assoc($sql)){
								$nama = $cek["nama"];
								$no_hp = $cek["no_hp"];
								$tanggal = $cek["tanggal"];
								$jenis_layanan = $cek["jenis_layanan"];
								$paket = $cek["paket"];
								$id_order = $cek["id"];
								$id_user = $cek["id_user"];
								$id_vendor = $cek["id_vendor"];
							
							?>
							<tr>
								<td>
									<!-- <img src="img/people.png"> -->
									<?php
									echo "<p name='nama' value=" . $nama .">" . $nama ."</p>";
								echo "</td>";
								echo "<td name='no_hp' value=" . $no_hp .">" . $no_hp . "</td>";
								echo "<td name='tanggal' value=" . $tanggal .">" . $tanggal . "</td>";
								echo "<td name='jenis_layanan' value=" . $jenis_layanan .">" . $jenis_layanan . "</td>";
								echo "<td name='paket' value=" . $paket .">" . $paket . "</td>";

								echo '<input type="hidden" name="nama" value=' . $nama . ' class="btn solid">';
								echo '<input type="hidden" name="no_hp" value=' . $no_hp . ' class="btn solid">';
								echo '<input type="hidden" name="tanggal" value=' . $tanggal . ' class="btn solid">';
								echo '<input type="hidden" name="jenis_layanan" value=' . $jenis_layanan . ' class="btn solid">';
								echo '<input type="hidden" name="paket" value=' . $paket . ' class="btn solid">';
								echo '<input type="hidden" name="id_vendor" value=' . $id_vendor . ' class="btn solid">';
								echo '<input type="hidden" name="id_user" value=' . $id_user . ' class="btn solid">';
								echo '<input type="hidden" name="id_order" value=' . $id_order . ' class="btn solid">';
								?>
								
								<td>
									<input type="submit" name="submit" value="Terima" class="btn btn-outline-success btn-icon-text btn_ubah fa-solid fa-check">
									<input type="submit" name="submit" value="Tolak" class="btn btn-outline-success btn-icon-text btn_ubah fa-solid fa-check">
								</td>
							</tr>
							<?php } ?>
							</form>
						</tbody>
					</table>
				</div>
				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class="fa-solid fa-plus"></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class="fa-solid fa-ellipsis"></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class="fa-solid fa-ellipsis"></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class="fa-solid fa-ellipsis"></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class="fa-solid fa-ellipsis"></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class="fa-solid fa-ellipsis"></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/dashboard_vendor.js"></script>
</body>

</html>