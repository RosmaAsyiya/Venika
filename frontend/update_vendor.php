<?php
session_start();

$id = $_SESSION['id'];

include '../database/connection.php';
if (!isset($_SESSION['is_login'])) {
    echo "<script>document.location.href='../login_vendor.php';</script>";
    die();
}

if(isset($_POST['submit'])){
    $photo = $_POST['']
}
?>
