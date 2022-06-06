<html>
<body> 
    <?php
    session_start();
    require('config.php');
    
    $id_pelanggan = $_SESSION['id_pelanggan'];
    $tujuan = $_POST ['tujuan'];
    $tanggal = $_POST ['tanggal'];
    $jumlah_orang = $_POST ['jumlah_orang'];
    $status = $_POST['status'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenwisata";
    $conn = new mysqli($servername, $username, $password, $dbname);    
    
    if ($tujuan == "") {
      header("location:Booking.php?tujuan=tujuankosong");
    }

    if ($tanggal == "") {
      header("location:Booking.php?tanggal=tanggalkosong");
    }

    if ($jumlah_orang == "") {
      header("location:Booking.php?jumlah_orang=jumlah_orangkosong");
    }

    if (!$tujuan == "" && !$tanggal == "" &&!$jumlah_orang == "" ) {
      $sql1 = "INSERT INTO pemesanan(id_pemesanan, id_pelanggan, id_paket, tgl_mulai, jumlah_orang, status)
      VALUES ('', '$id_pelanggan', '$tujuan', '$tanggal', '$jumlah_orang', '$status')";
    }

    if ($conn->query($sql1) === TRUE) {
      echo "Pesanan berhasil ditambahkan !";
      header("refresh:3;riwayat-perjalanan.php");
    } else {
      echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
  $conn->close();
    ?>
</body>
</html>