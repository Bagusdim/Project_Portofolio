<html>
<body> 
    <?php
    $tanggalberangkat = $_POST ['tanggalberangkat'];
    $jumlahorang = $_POST ['jumlahorang'];
    $tanggalbayar = $_POST ['tanggalbayar'];
    $status = $_POST ['status'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenwisata";
    $conn = new mysqli($servername, $username, $password, $dbname);

      if ($tanggalberangkat == "") {
        echo "<h4 style='color:red'>Tanggal Berangkat harus diisi!</h4>";
        header("refresh:3;index.php");
      }
  
      if ($jumlahorang == "") {
        echo "<h4 style='color:red'>Jumlah Orang harus diisi!</h4>";
        header("refresh:3;index.php");
      }
  
      if ($tanggalbayar == "") {
        echo "<h4 style='color:red'>Tanggal Bayar harus diisi!</h4>";
        header("refresh:3;index.php");
      }
  
      if ($status == "") {
        echo "<h4 style='color:red'>Status harus diisi!</h4>";
        header("refresh:3;index.php");
      }

    if (!$tanggalberangkat == "" && !$jumlahorang == "" && !$tanggalbayar == "" && !$status == "") {
        $sql = "UPDATE pemesanan SET tgl_mulai = '$tanggalberangkat', jumlah_orang = '$jumlahorang', tanggal_pembayaran = '$tanggalbayar', status = '$status' WHERE jumlah_orang = '$jumlahorang'";
      
    }
    
    
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diubah. Kembali ke halaman sebelumnya";
    header("refresh:3;index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
    ?>
</body>
</html>