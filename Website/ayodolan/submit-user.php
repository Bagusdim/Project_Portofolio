<html>
<body> 
    <?php 
    require('config.php');
    $email = $_POST ['email'];
    $katasandi = $_POST ['katasandi'];
    $nama = $_POST ['nama'];
    $tanggallahir = $_POST ['tanggallahir'];
    $jeniskelamin = $_POST ['jeniskelamin'];
    $alamat = $_POST ['alamat'];
    $nohp = $_POST ['nohp'];
    $kewarganegaraan = $_POST ['kewarganegaraan'];

    if ($nama == "") {
      header("location:tambah-akun-user.php?nama=namakosong");
    } else {
      if (!preg_match("/^[a-zA-Z-' ]*$/",$nama)) {
        header("location:tambah-akun-user.php?nama=namaErr");
      }
    }

    if ($jeniskelamin == "") {
      header("location:tambah-akun-user.php?jeniskelamin=jeniskelaminkosong");
    }

    if ($tanggallahir == "") {
      header("location:tambah-akun-user.php?tanggallahir=tanggallahirkosong");
    }

    if ($alamat == "") {
      header("location:tambah-akun-user.php?alamat=alamatkosong");
    }

    if ($katasandi == "") {
      header("location:tambah-akun-user.php?katasandi=katasandikosong");
    }

    if ($kewarganegaraan == "") {
      header("location:tambah-akun-user.php?kewarganegaraan=kewarganegaraankosong");
    }

    if ($nohp == "") {
      header("location:tambah-akun-user.php?nohp=nohpkosong");
    } else {
      if (!preg_match("/^[0-9-'+]*$/",$nohp)) {
        header("location:tambah-akun-user.php?nohp=nohpErr");
      }
    }

    if ($email == "") {
      header("location:tambah-akun-user.php?email=emailkosong");
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:tambah-akun-user.php?email=emailErr");
      }
    }
    
    if (!$nama == "" && preg_match("/^[a-zA-Z-' ]*$/",$nama) && !$katasandi == "" && !$kewarganegaraan == "" &&!$jeniskelamin == "" && !$tanggallahir == "" && !$alamat == "" && !$nohp == "" && preg_match("/^[0-9-'+]*$/",$nohp) && !$email == "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $sql = "INSERT INTO pendaftaran(email_pelanggan, nama_pelanggan, tglLahir_pelanggan, kelamin_pelanggan, alamat_pelanggan, telp_pelanggan, kewarganegaraan, kataSandi_pelanggan)
      VALUES ('$email', '$nama', '$tanggallahir', '$jeniskelamin', '$alamat', '$nohp', '$kewarganegaraan', '$katasandi')";
    }

    if ($conn->query($sql) === TRUE) {
      echo "Data berhasil ditambahkan. Kembali ke Halaman Login";
      header("refresh:3;Login.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
</body>
</html>