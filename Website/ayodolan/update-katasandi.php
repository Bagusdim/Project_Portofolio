<html>
<body> 
    <?php
    session_start();
    require('config.php');
    $nama = $_SESSION['id_pelanggan']; 
    $katasandi = $_POST ['katasandi'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenwisata";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($katasandi == "") {
        header("location:ubah-katasandi.php?katasandi=katasandikosong");
    }

    if ( !$katasandi == "" ) {
      $sql = "UPDATE pendaftaran SET kataSandi_pelanggan = '$katasandi' WHERE id_pelanggan = '$nama'";
    }
    
    
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diubah. Kembali ke halaman sebelumnya";
    header("refresh:3;profile.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
    ?>
</body>
</html>