<!doctype html>
<html lang="en">
  <head>
  	<title>AYODOLAN - Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/ayodolan-logo.png" type="image/x-icon"/>
    <style>
      .error {
          color:red;
      }
  </style>
  </head>
  <body>
    <!-- cek apakah sudah login -->
    <?php 
    session_start();
    if($_SESSION['status']!="login"){
      header("location:../index.php?pesan=belum_login");
    }
    ?> 
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
        <!-- Brand Logo   -->
        <div class="logo-brand" style="text-align: center; padding-top: 20px;">
            <a href="index.php"><img src="images/branding-logo.png" alt="Logo" style="opacity: .8; width: 85%;"></a>
        </div>
        <!-- /Brand Logo -->

				<div class="p-4 pt-5">
          <div class="user">
            <a href="" class="img logo rounded-circle mb-5" style="background-image: url(images/user-2-icon.png); margin-bottom: 0px !important;"></a>
            <!-- <a href=""><img src="images/user-2-icon.png" alt="user" style="width: 30%;"> --> 
          </div>
          <div class="user" style="padding-top: 15px;">
            <p align="center">
              <?php echo $_SESSION['username']; ?><br>
              Administrator
            </p>
            
          </div>

	        <ul class="list-unstyled components mb-5" style="margin-top: 3rem !important;">
	          <li class="active">
	            <a href="index.php"><i class="fa fa-fw fa-home"></i> Dashboard</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-fw fa-user"></i> Account Manager
              </a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="daftar-akun.php"><i class="fa fa-fw fa-circle-o"></i> Daftar Akun</a>
                </li>
                <li>
                    <a href="tambah-akun-user.php"><i class="fa fa-fw fa-circle-o"></i> Tambahkan Akun User</a>
                </li>
                <li>
                    <a href="tambah-akun-admin.php"><i class="fa fa-fw fa-circle-o"></i> Tambahkan Akun Admin</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-fw fa-archive"></i> Paket Wisata
              </a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="daftar-paket.php"><i class="fa fa-fw fa-circle-o"></i> Daftar Paket</a>
                </li>
                <li>
                    <a href="tambah-paket.php"><i class="fa fa-fw fa-circle-o"></i> Tambahkan Paket</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
	          </li>
	        </ul>

	        <div class="footer">
          <!--
            ##
          -->  
          </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button> -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <a>Dashboard / </a>  
                  <a href="index.php" style="color: #292929;">Edit Dashboard</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Edit Dashboard</h2>

        <!-- List Tabel -->
        <?php
        require('config.php');
        $target = $_GET['target'];
        $sql = "SELECT * FROM pemesanan JOIN paket_wisata USING (id_paket)";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

    ?>
    <form action="update-dashboard.php" method="POST">
        Tanggal Berangkat   :
        <span class="error">*</span>
        <input type="date" name="tanggalberangkat" class="form-control" placeholder="Tanggal Berangkat Anda" value="<?php echo $row['tgl_mulai'];?>">
        <br>
        Jumlah Orang  :
        <span class="error">*</span>
        <input type="text" name="jumlahorang" class="form-control" placeholder="Jumlah Orang" value="<?php echo $row['jumlah_orang'];?>">
        <br>
        Tanggal Bayar   :
        <span class="error">*</span>
        <input type="date" name="tanggalbayar" class="form-control" placeholder="Tanggal Bayar Anda" value="<?php echo $row['tanggal_pembayaran'];?>">
        <br>
        Status  :
        <span class="error">*</span>
        <select name="status" class="form-control">
          <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
          <option value="BELUM BAYAR">BELUM BAYAR</option>
          <option value="LUNAS">LUNAS</option>
          <option value="SELESAI">SELESAI</option>
        </select>
        <br>
        <input type='submit' value='Update'>
        </form>
        <!-- /List Tabel -->

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>