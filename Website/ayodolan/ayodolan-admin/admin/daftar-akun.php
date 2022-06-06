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
	          <li>
	            <a href="index.php"><i class="fa fa-fw fa-home"></i> Dashboard</a>
	          </li>
	          <li class="active">
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-fw fa-user"></i> Account Manager
              </a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li class="active">
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
                  <a>Account Management / </a>  
                  <a href="daftar-akun.php" style="color: #292929;">Daftar Akun</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Daftar Akun</h2>
        
        <!-- List Tabel -->
          <h5>User</h5>
            <?php
              require('config.php');
              $sql = "SELECT * FROM pendaftaran";
              $result = mysqli_query($conn, $sql);
              if($result->num_rows > 0) {
                  echo "<div style='overflow-x:auto;'><table class='content-table'>
                  <thead>
                    <tr>
                      <th>ID Cust.</th>
                      <th>Alamat Email</th>
                      <th>Nama Cust.</th>
                      <th>Tgl. Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Telp.</th>
                      <th>Kewarganegaraan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>";
                  while($row = $result -> fetch_assoc()){
                      echo "<tr><td>" . $row["id_pelanggan"]. "</td>
                      <td>" . $row["email_pelanggan"]. "</td>
                      <td>" . $row["nama_pelanggan"]. "</td>
                      <td>" . $row["tglLahir_pelanggan"]. "</td>
                      <td>" . $row["kelamin_pelanggan"]. "</td>
                      <td>" . $row["alamat_pelanggan"]. "</td>
                      <td>" . $row["telp_pelanggan"]. "</td>
                      <td>" . $row["kewarganegaraan"]. "</td>
                      <td> 
                      <a href='edit-user.php?target=".$row["id_pelanggan"]."'> <i class='fa fa-pencil-square-o'></i>
                      <a href=hapus-user.php?id=".$row["id_pelanggan"]." onclick=\"return confirm('Apakah anda yakin untuk menghapus?')\"><i class='fa fa-trash-o'></i></a>
                      </td>
                  </tr>";
                    }
                  echo "</table></div>";
              } else {
                  echo "Tidak ada data";
              }
              $conn->close();
            ?>
          <h5>Administrator</h5>
            <?php
                require('config.php');
                $sql = "SELECT * FROM pendaftaran_admin";
                $result = mysqli_query($conn, $sql);
                if($result->num_rows > 0) {
                    echo "<div style='overflow-x:auto;'><table class='content-table'>
                    <thead>
                      <tr>
                        <th>Alamat Email</th>
                        <th>Nama Admin</th>
                        <th>Tgl. Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Telp.</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>";
                    while($row = $result -> fetch_assoc()){
                        echo "<tr><td>" . $row["email_admin"]. "</td>
                        <td>" . $row["nama_admin"]. "</td>
                        <td>" . $row["tglLahir_admin"]. "</td>
                        <td>" . $row["kelamin_admin"]. "</td>
                        <td>" . $row["alamat_admin"]. "</td>
                        <td>" . $row["telp_admin"]. "</td>
                        <td> 
                        <a href='edit-admin.php?target=".$row["email_admin"]."'> <i class='fa fa-pencil-square-o'></i>
                        <a href=hapus-admin.php?id=".$row["email_admin"]." onclick=\"return confirm('Apakah anda yakin untuk menghapus?')\"><i class='fa fa-trash-o'></i></a>
                        </td>
                    </tr>";
                      }
                    echo "</table></div>";
                } else {
                    echo "Tidak ada data";
                }
                $conn->close();
              ?>
          
        <!-- /List Tabel -->

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>