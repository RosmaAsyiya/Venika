<?php 
// Mulai session
session_start();

// Panggil file config
include 'database/connection.php';

// Check apakah terdapat post Login
if (isset($_POST['register'])) {
	// username 
	$user = $_POST['reg_user'];

    //email
    $email = $_POST['reg_email'];

	// password
	$pass = $_POST['reg_pass'];

	// sql query 
	$sql = mysqli_query($koneksi, "INSERT INTO user values ('$username
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