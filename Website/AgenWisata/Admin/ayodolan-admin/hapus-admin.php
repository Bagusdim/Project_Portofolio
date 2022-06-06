<html>
<body> 
    <?php
    $email_admin = $_GET ['id'];
    require('config.php');
    $sql = "DELETE FROM pendaftaran_admin WHERE email_admin = '$email_admin'";
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