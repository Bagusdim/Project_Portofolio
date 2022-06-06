<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Hunting and Fishing">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Sign Up</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.1.3, nicepage.com">
    <link rel="icon" href="images/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "AYODOLAN",
		"url": "index.html",
		"sameAs": [
				"#",
				"#",
				"#"
		]
}</script>
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body">
    <section class="u-clearfix u-section-1" id="sec-66e1">
      <div class="u-clearfix u-sheet u-sheet-1">
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
                  <button type="submit" class="btn btn-primary">Sign up</button>
                </form>
                </div>
          
        <!-- /List Tabel -->
        
      </div>
    </section>    
  </body>
</html>