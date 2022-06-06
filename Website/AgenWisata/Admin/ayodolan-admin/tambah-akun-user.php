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
	          <li class="active">
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-fw fa-user"></i> Account Manager
              </a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="daftar-akun.php"><i class="fa fa-fw fa-circle-o"></i> Daftar Akun</a>
                </li>
                <li class="active">
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
                  <a>Account Management / </a>  
                  <a href="tambah-akun-user.php" style="color: #292929;">Tambahkan Akun User</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Tambahkan Akun User</h2>

        <!-- List Tabel -->
          
          <?php
            if (isset($_GET['nama'])){
                if ($_GET['nama'] == "namakosong"){
                    echo "<h4 style='color:red'>Nama harus diisi!</h4>";
                }
                else if ($_GET['nama'] == "namaErr"){
                    echo "<h4 style='color:red'>Nama hanya bisa diisi dengan huruf dan spasi</h4>";
                }
            }

            else if (isset($_GET['jeniskelamin'])){
                if ($_GET['jeniskelamin'] == "jeniskelaminkosong"){
                    echo "<h4 style='color:red'>Jenis Kelamin harus diisi!</h4>";
                }
            }

            else if (isset($_GET['tanggallahir'])){
                if ($_GET['tanggallahir'] == "tanggallahirkosong"){
                    echo "<h4 style='color:red'>Tanggal lahir harus diisi!</h4>";
                }
            }

            else if (isset($_GET['nohp'])){
                if ($_GET['nohp'] == "nohpkosong"){
                    echo "<h4 style='color:red'>No. HP harus diisi!</h4>";
                }
                else if ($_GET['nohp'] == "nohpErr"){
                    echo "<h4 style='color:red'>No. HP hanya bisa diisi dengan angka dan +</h4>";
                }
            }

            else if (isset($_GET['email'])){
                if ($_GET['email'] == "emailkosong"){
                    echo "<h4 style='color:red'>Email harus diisi!</h4>";
                }
                else if ($_GET['email'] == "emailErr"){
                    echo "<h4 style='color:red'>Format email salah</h4>";
                }
            }

            else if (isset($_GET['katasandi'])){
              if ($_GET['katasandi'] == "katasandikosong"){
                  echo "<h4 style='color:red'>Kata sandi harus diisi!</h4>";
              }
            }

            else if (isset($_GET['alamat'])){
              if ($_GET['alamat'] == "alamatkosong"){
                  echo "<h4 style='color:red'>Alamat harus diisi!</h4>";
              }
            }

            else if (isset($_GET['kewarganegaraan'])){
              if ($_GET['kewarganegaraan'] == "kewarganegaraankosong"){
                  echo "<h4 style='color:red'>Kewarganegaraan harus diisi!</h4>";
              }
            }

            ?>
                <div class="col-8 mt-5 mb-5 mx-auto">
                <form action="submit-user.php" method="POST">
                  Alamat Email :
                  <span class="error">*</span>
                  <input type="text" name="email" class="form-control" placeholder="Alamat Email Anda">
                  <br>
                  Kata Sandi :
                  <span class="error">*</span>
                  <input type="password" name="katasandi" class="form-control" placeholder="Kata Sandi Anda">
                  <br>            
                  Nama Lengkap  :
                  <span class="error">*</span>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda">
                  <br>
                  Tanggal Lahir   :
                  <span class="error">*</span>
                  <input type="date" name="tanggallahir" class="form-control" placeholder="Tanggal Lahir Anda">
                  <br>
                  Jenis Kelamin   :
                  <span class="error">*</span>
                  <br>
                  <input type="radio" name="jeniskelamin" value="Laki-laki">
                  <label for="lk">Laki-laki</label>
                  <input type="radio" name="jeniskelamin" value="Perempuan">
                  <label for="pr">Perempuan</label>
                  <br>
                  Alamat :
                  <span class="error">*</span>
                  <textarea name="alamat" class="form-control" placeholder="Alamat Anda"></textarea>
                  <br>
                  Nomor Telepon :
                  <span class="error">*</span>
                  <input type="text" name="nohp" class="form-control" placeholder="Nomor Telepon Anda">
                  <br>
                  Kewarganegaraan :
                  <span class="error">*</span>
                  <input type="text" name="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan Anda">
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