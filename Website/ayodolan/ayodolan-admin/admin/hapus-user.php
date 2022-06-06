<html>
<body> 
    <?php
    $id_pelanggan = $_GET ['id'];
    require('config.php');
    $sql = "DELETE FROM pendaftaran WHERE id_pelanggan = '$id_pelanggan'";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus. Kembali ke halaman sebelumnya";
    header("refresh:3;daftar-akun.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
    ?>
</body>
</html>