<?php

session_start();

include '../database/connection.php';

if(isset($_POST['submit'])){
    $id_booking = $_POST['id_booking'];
    $status = $_POST['status'];
    $id_vendor = $_POST['id_vendor'];
    echo $id_booking;
    echo $status;
    echo $id_vendor;

    // $sql = mysqli_query($koneksi,
    // "UPDATE booking SET status = '$status' where id = '$id_booking'");
    // $cek = mysqli_affected_rows($koneksi);
    // if ($cek > 0){
    //     echo '<script> alert(Status berhasil diubah!)';
    //     echo "<script>document.location.href='data_pesanan.php';</script>";
    // }
}

?>