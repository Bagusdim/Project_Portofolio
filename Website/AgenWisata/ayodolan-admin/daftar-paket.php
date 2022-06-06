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
                    <a href="tambah-akun.php"><i class="fa fa-fw fa-circle-o"></i> Tambahkan Akun</a>
                </li>
              </ul>
	          </li>
	          <li class="active">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-fw fa-archive"></i> Paket Wisata
              </a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li  class="active">
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
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Dashboard</h2>
        
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-unpaid">
              <div class="inner">
                <h3>27</h3>

                <p>Belum Dibayar</p>
              </div>
              <div class="icon">
                <i class="fa fa-ticket"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-paid">
              <div class="inner">
                <h3>16</h3>

                <p>Dibayar</p>
              </div>
              <div class="icon">
                <i class="fa fa-handshake-o"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-done">
              <div class="inner">
                <h3>159</h3>

                <p>Trip Selesai</p>
              </div>
              <div class="icon">
                <i class="fa fa-check-square"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <!-- List Tabel -->
          <h6>Daftar Pesanan</h6>
          
        <!-- /List Tabel -->

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>