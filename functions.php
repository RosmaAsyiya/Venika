<?php 
function registrasi($data) {
	global $koneksi;

	$username = strtolower(stripslashes($data["reg_user"]));
	$password = mysqli_real_escape_string($data["reg_pass"]);
	$password2 = mysqli_real_escape_string($data["reg_pass2"]);

	if( $reg_pass !== $reg_pass2 ) {
		echo "<script>
				alert('Konfirmasi password tidak sesuai!');
				</script>";
		return false;
	}
}
$reg_pass = password_hash($reg_pass, PASSWORD_DEFAULT);
var_dump($)



?>