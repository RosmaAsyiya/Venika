<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Vendor</title>
    <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" types="text/css" href="fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
</head>
<body>
    <div class="sidebar close">
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class="fas fa-home"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="navbar.html">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span class="link_name">Profile</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Profile</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span class="link_name">Layanan</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Layanan</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span class="link_name">Pesanan</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Pesanan</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span class="link_name">Logout</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <header>
            <h1>
                <label for="nav-toggle">
                <span class="fas fa-bars" style="text-align: center"></span>
                </label>
                Dashboard
            </h1>

            <div class="user-wrapper">
                <i class="fas fa-users-cog"></i>
                <div>
                <h4>Vendor A</h4>
                <small>Admin</small>
                </div>
            </div>
            </header>
        </div>

        <section class="customer-logos">
            <?php
                require_once "connection.php";

                $sql = mysqli_query($koneksi, "
                
                select * from user
                ")
?>
</body>
</html>