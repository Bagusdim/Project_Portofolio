<html>
<body> 
    <?php 
    $id_paket = $_POST ['id_paket'];
    $nama_paket = $_POST['nama_paket'];
    $lokasi = $_POST ['lokasi'];
    $durasi = $_POST ['durasi'];
    $kota = $_POST ['kota'];
    $provinsi = $_POST ['provinsi'];
    $fasilitas = $_POST ['fasilitas'];
    $harga = $_POST ['harga'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenwisata";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($id_paket == "") {
        echo "<h4 style='color:red'>ID Paket harus diisi! Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-paket.php");
      } else {
        if (!preg_match("/^[A-Z]{4}[0-9]{4}/",$id_paket)) {
          echo "<h4 style='color:red'>ID Paket hanya bisa diisi dengan 4 huruf kapital diikuti 4 angka. Kembali ke halaman sebelumnya</h4>";
          header("refresh:3;daftar-paket.php");
        }
      }
      
      if ($nama_paket == "") {
        echo "<h4 style='color:red'>Nama Paket harus diisi! Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-paket.php");
      }

      if ($lokasi == "") {
        echo "<h4 style='color:red'>Lokasi harus diisi! Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-paket.php");
      }
  
      if ($durasi == "") {
        echo "<h4 style='color:red'>Durasi harus diisi! Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-paket.php");
      }
  
      if ($kota == "") {
        echo "<h4 style='color:red'>Kota harus diisi! Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-paket.php");
      }
  
      if ($provinsi == "") {
        echo "<h4 style='color:red'>Provinsi harus diisi! Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-paket.php");
      }
  
      if ($fasilitas == "") {
        echo "<h4 style='color:red'>Fasilitas harus diisi! Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-paket.php");
      }
  
      if ($harga == "") {
        echo "<h4 style='color:red'>Harga harus diisi! Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-paket.php");
      }

    if (!$id_paket == "" && preg_match("/^[A-Z]{4}[0-9]{4}/",$id_paket) && !$nama_paket == "" && !$lokasi == "" && !$durasi == "" && !$kota == "" && !$provinsi == "" && !$fasilitas == "" && !$harga == "") {
        $sql = "UPDATE paket_wisata SET id_paket = '$id_paket', nama_paket='$nama_paket', harga_paket = '$harga', lokasi = '$lokasi', durasi = '$durasi', kota = '$kota', provinsi = '$provinsi', fasilitas = '$fasilitas' WHERE fasilitas = '$fasilitas'";
      
    }
    
    
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diubah. Kembali ke halaman sebelumnya";
    header("refresh:3;daftar-paket.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
    ?>
</body>
</html>