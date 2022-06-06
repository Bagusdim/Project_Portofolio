<html>
<body> 
    <?php
    $id_paket = $_GET ['id'];
    require('config.php');
    $sql = "DELETE FROM paket_wisata WHERE id_paket = '$id_paket'";
  if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus. Kembali ke halaman sebelumnya";
    header("refresh:3;daftar-paket.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
    ?>
</body>
</html>