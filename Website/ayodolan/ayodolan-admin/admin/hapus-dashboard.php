<html>
<body> 
    <?php
    $id_pemesanan = $_GET ['id'];
    require('config.php');
    $sql = "DELETE FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus. Kembali ke halaman sebelumnya";
    header("refresh:3;index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
    ?>
</body>
</html>