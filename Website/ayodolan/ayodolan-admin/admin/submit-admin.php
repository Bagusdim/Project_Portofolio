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

    if ($nama == "") {
      header("location:tambah-akun-admin.php?nama=namakosong");
    }

    if ($jeniskelamin == "") {
      header("location:tambah-akun-admin.php?jeniskelamin=jeniskelaminkosong");
    }

    if ($tanggallahir == "") {
      header("location:tambah-akun-admin.php?tanggallahir=tanggallahirkosong");
    }

    if ($alamat == "") {
      header("location:tambah-akun-admin.php?alamat=alamatkosong");
    }

    if ($katasandi == "") {
      header("location:tambah-akun-admin.php?katasandi=katasandikosong");
    }

    if ($nohp == "") {
      header("location:tambah-akun-admin.php?nohp=nohpkosong");
    } else {
      if (!preg_match("/^[0-9-'+]*$/",$nohp)) {
        header("location:tambah-akun-admin.php?nohp=nohpErr");
      }
    }

    if ($email == "") {
      header("location:tambah-akun-admin.php?email=emailkosong");
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:tambah-akun-admin.php?email=emailErr");
      }
    }
    
    if (!$nama == "" && !$katasandi == "" && !$jeniskelamin == "" && !$tanggallahir == "" && !$alamat == "" && !$nohp == "" && preg_match("/^[0-9-'+]*$/",$nohp) && !$email == "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $sql = "INSERT INTO pendaftaran_admin(email_admin, nama_admin, tglLahir_admin, kelamin_admin, alamat_admin, telp_admin, kataSandi_admin)
      VALUES ('$email', '$nama', '$tanggallahir', '$jeniskelamin', '$alamat', '$nohp', '$katasandi')";
    }

    if ($conn->query($sql) === TRUE) {
      echo "Data berhasil ditambahkan. Kembali ke daftar akun";
      header("refresh:3;daftar-akun.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
</body>
</html>