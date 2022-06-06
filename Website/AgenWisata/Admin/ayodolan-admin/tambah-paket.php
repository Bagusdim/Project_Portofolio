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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
      .error {
          color:red;
      }
    </style>
  </head>
  <body>
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
              admin1<br>
              Administrator
            </p>
            
          </div>

	        <ul class="list-unstyled components mb-5" style="margin-top: 3rem !important;">
	          <li>
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
	          <li class="active">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-fw fa-archive"></i> Paket Wisata
              </a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="daftar-paket.php"><i class="fa fa-fw fa-circle-o"></i> Daftar Paket</a>
                </li>
                <li class="active">
                    <a href="tambah-paket.php"><i class="fa fa-fw fa-circle-o"></i> Tambahkan Paket</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
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
                  <a>Paket Wisata / </a>  
                  <a href="tambah-paket.php" style="color: #292929;">Tambahkan Paket</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Tambahkan Paket Wisata</h2>

        <!-- List Tabel -->
        <?php
            if (isset($_GET['lokasi'])){
                if ($_GET['lokasi'] == "lokasikosong"){
                    echo "<h4 style='color:red'>Lokasi harus diisi!</h4>";
                }
            }

            else if (isset($_GET['durasi'])){
                if ($_GET['durasi'] == "durasikosong"){
                    echo "<h4 style='color:red'>Durasi harus diisi!</h4>";
                }
            }

            else if (isset($_GET['harga'])){
              if ($_GET['harga'] == "hargakosong"){
                  echo "<h4 style='color:red'>Harga harus diisi!</h4>";
              }
            }

            else if (isset($_GET['kota'])){
                if ($_GET['kota'] == "kotakosong"){
                    echo "<h4 style='color:red'>Kota harus diisi!</h4>";
                }
            }

            else if (isset($_GET['provinsi'])){
              if ($_GET['provinsi'] == "provinsikosong"){
                  echo "<h4 style='color:red'>Provinsi harus diisi!</h4>";
              }
            }

            else if (isset($_GET['fasilitas'])){
              if ($_GET['fasilitas'] == "fasilitaskosong"){
                  echo "<h4 style='color:red'>Fasilitas harus diisi!</h4>";
              }
            }

            else if (isset($_GET['jumlahorang'])){
              if ($_GET['jumlahorang'] == "jumlahorangkosong"){
                  echo "<h4 style='color:red'>Jumlah orang harus diisi!</h4>";
              }
            }

            else if (isset($_GET['idDetail_paket'])){
              if ($_GET['idDetail_paket'] == "idDetail_paketkosong"){
                  echo "<h4 style='color:red'>ID Detail Paket harus diisi!</h4>";
              }
              else if ($_GET['idDetail_paket'] == "idDetail_paketErr"){
                  echo "<h4 style='color:red'>ID Detail Paket hanya bisa diisi dengan 3 huruf kapital diikuti 3 angka</h4>";
              }
            }

            ?>
                <div class="col-8 mt-5 mb-5 mx-auto">
                <form action="submit-paket.php" method="POST">
                  ID Detail Paket  :
                  <span class="error">*</span>
                  <input type="text" name="idDetail_paket" class="form-control" placeholder="ID Detail Paket">
                  <br>
                  Lokasi :
                  <span class="error">*</span>
                  <textarea name="lokasi" class="form-control" placeholder="Lokasi"></textarea>
                  <br>
                  Durasi :
                  <span class="error">*</span>
                  <input type="number" name="durasi" class="form-control" placeholder="Durasi (hari)">
                  <br>            
                  Kota  :
                  <span class="error">*</span>
                  <input type="text" name="kota" class="form-control" placeholder="Kota">
                  <br>
                  Provinsi   :
                  <span class="error">*</span>
                  <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
                  <br>
                  Fasilitas :
                  <span class="error">*</span>
                  <textarea name="fasilitas" class="form-control" placeholder="Fasilitas"></textarea>
                  <br>
                  Jumlah Orang :
                  <span class="error">*</span>
                  <input type="number" name="jumlahorang" class="form-control" placeholder="Jumlah Orang">
                  <br>
                  Harga :
                  <span class="error">*</span>
                  <input type="number" name="harga" class="form-control" placeholder="Harga (Rp)">
                  <br>            
                  <input type="submit" value="Tambahkan">
                </form>
                </div>
          
        <!-- /List Tabel -->

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>