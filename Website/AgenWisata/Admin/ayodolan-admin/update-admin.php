<html>
<body> 
    <?php 
    $email = $_POST ['email'];
    $katasandi = $_POST ['katasandi'];
    $nama = $_POST ['nama'];
    $tanggallahir = $_POST ['tanggallahir'];
    $jeniskelamin = $_POST ['jeniskelamin'];
    $alamat = $_POST ['alamat'];
    $nohp = $_POST ['nohp'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenwisata";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($nama == "") {
      header("location:edit-user.php?nama=namakosong");
    }

    if ($katasandi == "") {
        header("location:edit-user.php?katasandi=katasandikosong");
    }

    if ($jeniskelamin == "") {
      header("location:edit-user.php?jeniskelamin=jeniskelaminkosong");
    }

    if ($tanggallahir == "") {
      header("location:edit-user.php?tanggallahir=tanggallahirkosong");
    }

    if ($alamat == "") {
      header("location:edit-user.php?alamat=alamatkosong");
    }

    if ($nohp == "") {
      header("location:edit-user.php?nohp=nohpkosong");
    } else {
      if (!preg_match("/^[0-9-'+]*$/",$nohp)) {
        header("location:edit-user.php?nohp=nohpErr");
      }
    }

    if ($email == "") {
      header("location:edit-user.php?email=emailkosong");
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:edit-user.php?email=emailErr");
      }
    }

    if (!$nama == "" && !$katasandi == "" && !$jeniskelamin == "" && !$tanggallahir == "" && !$alamat == "" && !$nohp == "" && preg_match("/^[0-9-'+]*$/",$nohp) && !$email == "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $sql = "UPDATE pendaftaran_admin SET email_admin = '$email', nama_admin = '$nama', tglLahir_admin = '$tanggallahir', kelamin_admin = '$jeniskelamin', alamat_admin = '$alamat', telp_admin = '$nohp', kataSandi_admin = '$katasandi' WHERE nama_admin = '$nama'";
    }
    
    
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diubah. Kembali ke halaman sebelumnya";
    header("refresh:3;daftar-akun.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
    ?>
</body>
</html>