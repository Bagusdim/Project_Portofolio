<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>AYODOLAN - Booking</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/Booking.css" media="screen">
    <meta name="generator" content="Nicepage 3.1.3, nicepage.com">
    <link rel="icon" href="images/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "AYODOLAN",
		"url": "index.php",
		"logo": "images/11901401-0.png",
		"sameAs": [
				"#",
				"#",
				"#"
		]
}</script>
    <meta property="og:title" content="Booking">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.php">
  </head>
  <body class="u-body" style="background-image:url(images/pexels-photo-3876308.jpeg)">
      <?php
        if (isset($_GET['tujuan'])){
          if ($_GET['tujuan'] == "tujuankosong"){
              echo "<h4 style='color:red'>Tujuan harus diisi!</h4>";
          }
        }

        else if (isset($_GET['tanggal'])){
            if ($_GET['tanggal'] == "tanggalkosong"){
                echo "<h4 style='color:red'>Tanggal harus diisi!</h4>";
            }
        }

        else if (isset($_GET['jumlah_orang'])){
            if ($_GET['jumlah_orang'] == "jumlah_orangkosong"){
                echo "<h4 style='color:red'>Jumlah Orang dalam Rombongan harus diisi!</h4>";
            }
        }

      ?>
    <section class="u-align-left-md u-align-left-sm u-align-left-xs u-clearfix u-image u-shading u-section-1" id="carousel_86b3">
      <div class="u-clearfix u-sheet u-sheet-1">
      <h3 align="center" style="margin-top:50px;">Pilih Tujuan Anda</h3>
      <br><br><br>
        <div class="u-form u-form-1">
          <br><br>
          <div class="col-8 mt-5 mb-5 mx-auto">
                <form action="pesan-paket.php" method="POST">
                  Tujuan :
                  <span class="error">*</span>
                  <select name="tujuan" class="form-control">
                    <?php
                      require('config.php');
                      $no     = 0;
                      $query  = mysqli_query($conn, "SELECT * FROM paket_wisata");
                      while ($data = mysqli_fetch_array($query)){
                      $no++;
                      ?> 
                        <option value="<?php echo $data["id_paket"]?>"><?php echo $data["nama_paket"]; echo " - "; echo $data["id_paket"]?></option>              
                    <?php } ?>
                  </select>
                  <br>
                  <?php
                    require('config.php');
                    $query  = mysqli_query($conn, "SELECT * FROM paket_wisata"); 
                    $data = mysqli_fetch_array($query)
                  ?>
                  Tanggal :
                  <span class="error">*</span>
                  <input type="date" name="tanggal" class="form-control">
                  <br>            
                  Jumlah Orang  :
                  <span class="error">*</span>
                  <input type="number" name="jumlah_orang" class="form-control" placeholder="Jumlah Orang dalam Rombongan">
                  <br>
                  <input type="hidden" name="status" value="BELUM BAYAR" class="form-control">
                  <br>   
                  <input type="submit" value="Pesan Sekarang" class="btn btn-primary" style="color:white;">
                </form>
                </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-c996"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1"><!--position-->
                  <div data-position="" class="u-position u-position-1"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-1"><!--block_header_content-->Alamat<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-2"><!--block_content_content-->Jl. Sukamaju No.76, Jebres, Surakarta<br>573663<br>Jawa Tengah, Indonesia<!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2"><!--position-->
                  <div data-position="" class="u-position u-position-2"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-block-header u-text u-text-3"><!--block_header_content--> Kontak Kami<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-block-content u-text u-text-4"><!--block_content_content--> (0271) 8876 887 - Telepon<br>(62) 8866 3513 2211 - Whatsapp<!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a>
        Copyright &copy; <script>document.write(new Date().getFullYear())</script> -</p>
      </a>
      <a class="u-link" href="index.php" target="_blank">
        Ayodolan[dot]com
      </a>
      <br>
      All Rights Reserved
    </section>
  </body>
</html>