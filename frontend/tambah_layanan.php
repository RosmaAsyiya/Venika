<?php 
// Mulai session
session_start();

// Panggil file config
include '../database/connection.php';

$id = $_SESSION['id'];

// Check apakah terdapat post register
if (isset($_POST['tambah'])) {
	if(empty($_POST["thumbnail"]) && empty($_POST["jenis_layanan"])
     && empty($_POST["deskripsi"]) && empty($_POST["fasilitas"]) 
     && empty($_POST["variasi"]) && empty($_POST["no_hp"]) 
     && empty($_POST["instagram"]) && empty($_POST["facebook"]) 
     && empty($_POST["twitter"]) && empty($_POST["website"]) && empty($_POST["galeri"]))
	{
        echo "<script>alert('Isi semua form!');</script>";
		echo "<script>document.location.href='tambah_data_vendor.php';</script>";
		return false;
	}
	else{
		// Thumbnail
		$thumbnail = mysqli_real_escape_string($koneksi, $_POST["thumbnail"]);
		// Jenis Layanan
		$jenis_layanan = mysqli_real_escape_string($koneksi, $_POST["jenis_layanan"]);
		// Deskripsi
		$deskripsi = mysqli_real_escape_string($koneksi, $_POST["deskripsi"]);
		// Fasilitas
		$fasilitas = mysqli_real_escape_string($koneksi, $_POST["fasilitas"]);
        // Variasi
		$variasi = mysqli_real_escape_string($koneksi, $_POST["variasi"]);
		// Adat
		$adat = mysqli_real_escape_string($koneksi, $_POST["adat"]);
		// Nomor HP
		// $no_hp = mysqli_real_escape_string($koneksi, $_POST["no_hp"]);
        // // Instagram
		// $instagram = mysqli_real_escape_string($koneksi, $_POST["instagram"]);
        // // Facebook
		// $facebook = mysqli_real_escape_string($koneksi, $_POST["facebook"]);
        // // Twitter
		// $twitter = mysqli_real_escape_string($koneksi, $_POST["twitter"]);
        // // Website
		// $website = mysqli_real_escape_string($koneksi, $_POST["website"]);
        // Galeri
		$galeri = mysqli_real_escape_string($koneksi, $_POST["galeri"]);

		$sql = mysqli_query($koneksi,
        "INSERT INTO jenis_layanan(id_vendor, nama_layanan, deskripsi, fasilitas, variasi, galeri, adat)
        values ('$id', '$jenis_layanan', '$deskripsi', '$fasilitas', '$variasi', '$thumbnail', '$adat')");
		if(mysqli_affected_rows($koneksi) > 0) {
			$sql2 = mysqli_query($koneksi, "INSERT INTO galeri_jenis_layanan(id_vendor, id_jenis, galeri)
			values ('1', (SELECT id FROM jenis_layanan order by id desc limit 1), '$galeri')");
			if(mysqli_num_rows($sql2) > 0) {
                    // beri pesan dan dialihkan ke halaman admin
                    echo "<script>alert('Tambah Layanan Berhasil!');
                    </script>";
                    echo "<script>document.location.href='kategori_layanan_vendor.php';</script>";
				}
			else{
				echo "<script>alert('ERROR!');</script>";
				echo "<script>document.location.href='kategori_layanan_vendor.php';</script>";
				}
			}
				}
			}
else{
	echo "<script>alert('masukkan data!'); </script>";
}
?>