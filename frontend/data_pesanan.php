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
					<li><a href="tambah_data_vendor.html"><i class="fa-solid fa-file-circle-plus icon"></i> Tambah
							Data</a></li>
				</ul>
			</li>
			<li>
				<a href="data_pesanan.php" class="active">
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
			<i class="fa-solid fa-bars toggle-sidebar bar"></i>
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
											<ul class="nav-rightt">
												<li class="user-profile header-notification">
													<a href="#!" class="arrowdown">
														<img src="img/circle-user-solid.svg" class="img-radius"
															alt="User-Profile-Image">
														<?php echo "<span>" . $_SESSION['username'] . "</span>" ?>
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
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Data Pesanan</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Pesanan</a>
						</li>
						<li><i class="fa-solid fa-angle-right"></i></li>
						<li>
							<a class="active" href="#">Data Pesanan</a>
						</li>
					</ul>
				</div>

				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<!-- <button type="button" class="btn_tambahdata" data-bs-toggle="modal" data-bs-target="#exampleModal"
				data-bs-whatever="@mdo">
				<i class="fa-solid fa-circle-plus"></i>
				Tambah Data
			</button> -->

			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Pesanan</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form class="needs-validation">
								<div class="mb-3">
									<label for="validationCustom01" class="form-label">Nama :</label>
									<input type="text" class="form-control" id="validationDefault01" required>
								</div>
								<div class="mb-3">
									<label for="recipient-name" class="col-form-label">Telephone :</label>
									<input type="text" class="form-control" id="nama">
								</div>
								<div class="mb-3">
									<label for="validationCustom03" class="col-form-label">Tanggal Booking</label>
									<input type="date" class="form-control" id="validationDefault03" required>
								</div>
								<div class="mb-3">
									<label for="recipient-name" class="col-form-label">Layanan :</label>
									<select class="form-select" aria-label="Default select example"
										id="validationDefault03" required>
										<option value="">Pilih Jenis Layanan</option>
										<option value="">Dekorasi</option>
										<option value="">Foto & Video</option>
										<option value="">Gaun Pengantin</option>
										<option value="">Gedung</option>
										<option value="">Katering</option>
										<option value="">Makeup</option>
										<option value="">MC</option>
										<option value="">Music Band</option>
										<option value="">Sewa Mobil</option>
										<option value="">Sound System</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="message-text" class="col-form-label">Variasi Layanan</label>
									<textarea class="form-control" id="message-text" cols="30" rows="5"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn_tutup" data-bs-dismiss="modal">Tutup</button>
							<button type="submit" class="btn_tambah"><i class="fa-solid fa-floppy-disk"></i>
								Simpan</button>
						</div>
					</div>
				</div>
			</div>


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





			<!-- Tabel Data Pesanan -->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Pesanan</h3>
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
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							// $id = $_SESSION['id'];
							$sql = mysqli_query($koneksi,
							"SELECT * FROM booking WHERE id_vendor = '$id'");
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
								?>
								<!-- <td>
									<span class="status completed">Completed</span>
								</td> -->
								<!-- <td>
									<button type="button" class="btn btn-outline-warning btn-icon-text btn_ubah"><i
											class="fa-solid fa-pen-to-square"></i> Ubah</button>
									<button type="button" class="btn btn-outline-danger btn-icon-text btn_hapus"><i
											class="fa-solid fa-trash-can"></i> Hapus</button>
								</td> -->
							</tr>
							
							<?php } ?>
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