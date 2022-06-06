<html>
<body> 
    <?php 
    require('config.php');
    $idDetail_paket = $_POST ['idDetail_paket'];
    $lokasi = $_POST ['lokasi'];
    $durasi = $_POST ['durasi'];
    $kota = $_POST ['kota'];
    $provinsi = $_POST ['provinsi'];
    $fasilitas = $_POST ['fasilitas'];
    $harga = $_POST ['harga'];
    $jumlahorang = $_POST ['jumlahorang'];

    if ($idDetail_paket == "") {
        header("location:tambah-paket.php?idDetail_paket=idDetail_paketkosong");
      } else {
        if (!preg_match("/^[A-Z]{3}[0-9]{3}/",$idDetail_paket)) {
          header("location:tambah-paket.php?idDetail_paket=idDetail_paketErr");
        }
    }

    if ($lokasi == "") {
      header("location:tambah-paket.php?lokasi=lokasikosong");
    }

    if ($durasi == "") {
      header("location:tambah-paket.php?durasi=durasikosong");
    }

    if ($kota == "") {
      header("location:tambah-paket.php?kota=kotakosong");
    }

    if ($provinsi == "") {
      header("location:tambah-paket.php?provinsi=provinsikosong");
    }

    if ($fasilitas == "") {
      header("location:tambah-paket.php?fasilitas=fasilitaskosong");
    }

    if ($harga == "") {
      header("location:tambah-paket.php?harga=hargakosong");
    }

    if ($jumlahorang == "") {
        header("location:tambah-paket.php?jumlahorang=jumlahorangkosong");
    }
    
    if (!$idDetail_paket == "" && preg_match("/^[A-Z]{3}[0-9]{3}/",$idDetail_paket) && !$lokasi == "" && !$durasi == "" && !$kota == "" && !$provinsi == "" && !$fasilitas == "" && !$harga == "") {
      $sql = 
      "INSERT INTO detail_paket(idDetail_paket, lokasi, durasi, kota, provinsi, fasilitas)
      VALUES ('$idDetail_paket', '$lokasi', '$durasi', '$kota', '$provinsi', '$fasilitas')";
      "INSERT INTO paket_wisata(jumlah_orang,harga_paket)
      VALUES ('$jumlahorang', '$harga')";
    }

    if ($conn->query($sql) === TRUE) {
      echo "Data berhasil ditambahkan. Kembali ke daftar paket";
      header("refresh:3;daftar-paket.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
</body>
</html>