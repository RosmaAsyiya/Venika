<?php 
// Mulai session
session_start();

// Panggil file config
include 'database/connection.php';

// Check apakah terdapat post Login
if (isset($_POST['login'])) {
	// username 
	$user = $_POST['username'];
	// password
	$pass = $_POST['password'];

	// sql query 
	$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$user' AND password='$pass'");
	$cek = mysqli_num_rows($sql);

	// apakah user tersebut ada 
	if ($cek > 0) {
		// buat session login
		$_SESSION['is_login'] = true;

		// beri pesan dan dialihkan ke halaman admin
		// echo "berhasil login";
		echo "<script>document.location.href='landing_page.php';</script>";
	}
	else{
		// beri pesan dan dialihkan ke halaman login
		echo "<script>document.location.href='index.php';</script>";
	}
}

?>