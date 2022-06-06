<html>
<body> 
    <?php 
    require('config.php');
    $id_pemesanan = $_POST ['id_pemesanan'];
    $bukti = $_POST ['bukti'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenwisata";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "UPDATE pemesanan SET bukti = '$bukti' where id_pemesanan = '$id_pemesanan'";

    if ($conn->query($sql) === TRUE) {
      echo "Data berhasil ditambahkan. Kembali ke daftar paket";
      header("refresh:3;riwayat-perjalanan.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
</body>
</html>