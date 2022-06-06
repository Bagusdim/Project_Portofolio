<link rel="icon" href="images/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <?php 
    session_start();
    if($_SESSION['status']!="login"){
      header("location:../index.php?pesan=belum_login");
    }
    ?> 
<?php
        require('config.php');
        $target = $_GET['target'];
        $sql = "SELECT * FROM pemesanan where id_pemesanan = '$target'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        
    ?>
                
                <div class="col-8 mt-5 mb-5 mx-auto">
                Untuk pembayaran silahkan transfer ke rekenening :
                <br>
                BCA 3930696764 <br> a.n Arrico Handyanto
                <br><br>
                Setelah itu Anda akan mendapatkan Kode Verifikasi dan silahkan isikan di bawah ini.
                <br>
                <form action="submit-bayar.php" method="POST">
                
                <span class="error"></span>
                <input type="hidden" name="id_pemesanan" class="form-control" value="<?php echo $row['id_pemesanan'];?>">
                <br>
                Kode Verifikasi  :
                <span class="error">*</span>
                <input type="text" name="bukti" class="form-control" placeholder="Kode Verifikasi" value="<?php echo $row['bukti'];?>">
                <br>
                  <input type="submit" value="Verifikasi">
                </form>
                Setelah itu admin kami akan segera mengecek dan mengubah status pemesanan Anda. Terima kasih
                </div>