<html>
<body> 
    <?php 
    require('config.php');
    $id_paket = $_POST ['id_paket'];
    $nama_paket = $_POST['nama_paket'];
    $gambar = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $lokasi = $_POST ['lokasi'];
    $durasi = $_POST ['durasi'];
    $kota = $_POST ['kota'];
    $provinsi = $_POST ['provinsi'];
    $fasilitas = $_POST ['fasilitas'];
    $harga = $_POST ['harga'];

    if ($id_paket == "") {
      header("location:tambah-paket.php?id_paket=id_paketkosong");
    } else {
      if (!preg_match("/^[A-Z]{4}[0-9]{4}/",$id_paket)) {
        header("location:tambah-paket.php?id_paket=id_paketErr");
      }
    }

    if ($nama_paket == "") {
      header("location:tambah-paket.php?nama_paket=nama_paketkosong");
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

    if (!$id_paket == "" && preg_match("/^[A-Z]{4}[0-9]{4}/",$id_paket) && !$nama_paket == "" && !$lokasi == "" && !$durasi == "" && !$kota == "" && !$provinsi == "" && !$fasilitas == "" && !$harga == "") {
      move_uploaded_file($file_tmp, '../../images/wisata/'.$gambar);
      $sql = "INSERT INTO paket_wisata(id_paket, nama_paket, gambar, harga_paket, lokasi, durasi, kota, provinsi, fasilitas)
      VALUES ('$id_paket', '$nama_paket', '$gambar', '$harga', '$lokasi', '$durasi', '$kota', '$provinsi', '$fasilitas')";
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