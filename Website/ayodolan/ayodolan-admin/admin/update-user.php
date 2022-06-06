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
      echo "<h4 style='color:red'>Nama harus diisi! Kembali ke halaman sebelumnya</h4>";
      header("refresh:3;daftar-akun.php");
    } else {
      if (!preg_match("/^[a-zA-Z-' ]*$/",$nama)) {
        echo "<h4 style='color:red'>Nama hanya bisa diisi dengan huruf dan spasi. Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-akun.php");
      }
    }

    if ($katasandi == "") {
      echo "<h4 style='color:red'>Kata Sandi harus diisi! Kembali ke halaman sebelumnya</h4>";
      header("refresh:3;daftar-akun.php");
    }

    if ($kewarganegaraan == "") {
      echo "<h4 style='color:red'>Kewarganegaraan harus diisi! Kembali ke halaman sebelumnya</h4>";
      header("refresh:3;daftar-akun.php");
    }

    if ($jeniskelamin == "") {
      echo "<h4 style='color:red'>Jenis Kelamin harus diisi! Kembali ke halaman sebelumnya</h4>";
      header("refresh:3;daftar-akun.php");
    }

    if ($tanggallahir == "") {
      echo "<h4 style='color:red'>Tanggal lahir harus diisi! Kembali ke halaman sebelumnya</h4>";
      header("refresh:3;daftar-akun.php");
    }

    if ($alamat == "") {
      echo "<h4 style='color:red'>Alamat harus diisi! Kembali ke halaman sebelumnya</h4>";
      header("refresh:3;daftar-akun.php");
    }

    if ($nohp == "") {
      echo "<h4 style='color:red'>No. HP harus diisi! Kembali ke halaman sebelumnya</h4>";
      header("refresh:3;daftar-akun.php");
    } else {
      if (!preg_match("/^[0-9-'+]*$/",$nohp)) {
        echo "<h4 style='color:red'>No. HP hanya bisa diisi dengan angka dan +. Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-akun.php");
      }
    }

    if ($email == "") {
      echo "<h4 style='color:red'>Email harus diisi! Kembali ke halaman sebelumnya</h4>";
      header("refresh:3;daftar-akun.php");
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h4 style='color:red'>Format email salah. Kembali ke halaman sebelumnya</h4>";
        header("refresh:3;daftar-akun.php");
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