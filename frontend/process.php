<?php

    include '../database/connection.php';

    if($_POST['submit'] == 'Terima'){
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $tanggal = $_POST['tanggal'];
    $jenis_layanan = $_POST['jenis_layanan'];
    $paket = $_POST['paket'];
    $id_vendor = $_POST['id_vendor'];
    $id_user = $_POST['id_user'];
    $id_order = $_POST['id_order']; 

    $sql = mysqli_query($koneksi, 
    "INSERT INTO booking(id_vendor, id_user, nama, no_hp, tanggal, jenis_layanan, paket, status)
    VALUES ('$id_vendor','$id_user','$nama','$no_hp','$tanggal','$jenis_layanan','$paket', '0')");
    
    if(mysqli_affected_rows($koneksi) > 0){
        // echo $cek;
        $sql1 = mysqli_query($koneksi,
        "DELETE FROM request_order where id = '$id_order'");

        if(mysqli_affected_rows($koneksi) > 0){

            echo '<script> alert(Data berhasil diterima!)';
            echo "<script>document.location.href='dashboard_vendor.php';</script>";
        }
        else{
            echo '<script> alert("ERROR!");</script>';
            echo "<script>document.location.href='dashboard_vendor.php';</script>";
            }
        }
    else{
        echo "ERROR!";
    }
}
    if($_POST['submit'] == 'Tolak'){
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $tanggal = $_POST['tanggal'];
        $jenis_layanan = $_POST['jenis_layanan'];
        $paket = $_POST['paket'];
        $id_order = 
        $sql1 = mysqli_query($koneksi,
        "DELETE FROM request_order where id = '$id_order'");

        if(mysqli_affected_rows($koneksi) > 0){

            echo '<script> alert(Data berhasil diterima!)';
            echo "<script>document.location.href='req_pesanan.php';</script>";
        }
        else{
            echo '<script> alert("ERROR!");</script>';
            echo "<script>document.location.href='dashboard_vendor.php';</script>";
            }
        }
    
    
    
    // echo $id_vendor;
    // echo $id_user;
    // echo $nama;
    // echo $no_hp;
    // echo $tanggal;
    // echo $jenis_layanan;
    // echo $paket;

?>