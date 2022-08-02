<?php

    include '../database/connection.php';

    if($_POST['submit'] == 'terima'){
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $tanggal = $_POST['tanggal'];
    $jenis_layanan = $_POST['jenis_layanan'];
    $paket = $_POST['paket'];
    $id_vendor = $_POST['id_vendor'];
    $id_user = $_POST['id_user'];
    $id_booking = $_POST['id_booking'];
    $note = $_POST['note'];

    $sql = mysqli_query($koneksi,
    "UPDATE booking SET status = 1 where id = '$id_booking'");

    if(mysqli_affected_rows($koneksi) > 0){
        $sql = mysqli_query($koneksi,
        "INSERT INTO note(id_booking, note) values ('$id_booking', '$note')");
        $cek = mysqli_affected_rows($koneksi);
        if($cek > 0){
        echo '<script> alert(Data berhasil diterima!)';
        echo "<script>document.location.href='req_pesanan.php';</script>";
        }
    }

    else{
        echo "<script>document.location.href='req_pesanan.php';</script>";
    }
}
    if($_POST['submit'] == 'tolak'){
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $tanggal = $_POST['tanggal'];
        $jenis_layanan = $_POST['jenis_layanan'];
        $paket = $_POST['paket'];
        $id_booking = $_POST['id_booking'];
        $note = $_POST['note'];

        $sql = mysqli_query($koneksi,
        "UPDATE booking SET status = 3 where id = '$id_booking'");

    if(mysqli_affected_rows($koneksi) > 0){
        $sql = mysqli_query($koneksi,
        "INSERT INTO note(id_booking, note) values ('$id_booking', '$note')");
        $cek = mysqli_affected_rows($koneksi);
        if($cek > 0){
        echo '<script> alert(Data berhasil ditolak!)';
        echo "<script>document.location.href='req_pesanan.php';</script>";
        }
    }

    else{
        echo "<script>document.location.href='req_pesanan.php';</script>";
    }

    echo "<script>document.location.href='req_pesanan.php';</script>";
}

echo "<script>document.location.href='req_pesanan.php';</script>";

    // echo $id_vendor;
    // echo $id_user;
    // echo $nama;
    // echo $no_hp;
    // echo $tanggal;
    // echo $jenis_layanan;
    // echo $paket;

?>