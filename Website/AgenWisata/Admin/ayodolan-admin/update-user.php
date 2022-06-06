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
    $kewarganegaraan = $_POST ['kewarganegaraan'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agenwisata";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($nama == "") {
      header("location:edit-user.php?nama=namakosong");
    } else {
      if (!preg_match("/^[a-zA-Z-' ]*$/",$nama)) {
        header("location:edit-user.php?nama=namaErr");
      }
    }

    if ($katasandi == "") {
        header("location:edit-user.php?katasandi=katasandikosong");
    }

    if ($kewarganegaraan == "") {
        header("location:edit-user.php?kewarganegaraan=kewarganegaraankosong");
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

    if (!$nama == "" && preg_match("/^[a-zA-Z-' ]*$/",$nama) && !$katasandi == "" && !$kewarganegaraan == "" &&!$jeniskelamin == "" && !$tanggallahir == "" && !$alamat == "" && !$nohp == "" && preg_match("/^[0-9-'+]*$/",$nohp) && !$email == "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $sql = "UPDATE pendaftaran SET email_pelanggan = '$email', nama_pelanggan = '$nama', tglLahir_pelanggan = '$tanggallahir', kelamin_pelanggan = '$jeniskelamin', alamat_pelanggan = '$alamat', telp_pelanggan = '$nohp', kewarganegaraan= '$kewarganegaraan', kataSandi_pelanggan = '$katasandi' WHERE nama_pelanggan = '$nama'";
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