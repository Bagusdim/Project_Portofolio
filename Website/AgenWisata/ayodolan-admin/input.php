<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    .error {
        color:red;
    }
    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
.judul{
    color:#ffffff;
}
body{
    height: 100vh;
    background-image: url(https://bit.ly/2FPT1J9);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 500px;

    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    text-align: left;
    color: #000000;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;
}
.container label{
    text-align: left;
    color: #ffffff;
}
 
 .input {
     color:#ffffff ;
 }

 #submit-btn {
    background: -webkit-linear-gradient(right, #AFEEEE, #008080);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #AFEEEE;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #AFEEEE;
}

    
</style>
<body>
<?php
// include('daftarmenu.php');

if (isset($_GET['nama'])){
    if ($_GET['nama'] == "namakosong"){
        echo "<h4 style='color:red'>Nama harus diisi!</h4>";
    }
    else if ($_GET['nama'] == "namaErr"){
        echo "<h4 style='color:red'>Nama hanya bisa diisi dengan huruf dan spasi</h4>";
    }
}

else if (isset($_GET['jeniskelamin'])){
    if ($_GET['jeniskelamin'] == "jeniskelaminkosong"){
        echo "<h4 style='color:red'>Jenis Kelamin harus diisi!</h4>";
    }
}


else if (isset($_GET['tanggallahir'])){
    if ($_GET['tanggallahir'] == "tanggallahirkosong"){
        echo "<h4 style='color:red'>Tanggal lahir harus diisi!</h4>";
    }
}

else if (isset($_GET['jenis'])){
    if ($_GET['jenis'] == "jeniskosong"){
        echo "<h4 style='color:red'>Jenis harus diisi!</h4>";
    }
}


else if (isset($_GET['nohp'])){
    if ($_GET['nohp'] == "nohpkosong"){
        echo "<h4 style='color:red'>No. HP harus diisi!</h4>";
    }
    else if ($_GET['nohp'] == "nohpErr"){
        echo "<h4 style='color:red'>No. HP hanya bisa diisi dengan angka dan +</h4>";
    }
}

else if (isset($_GET['email'])){
    if ($_GET['email'] == "emailkosong"){
        echo "<h4 style='color:red'>Email harus diisi!</h4>";
    }
    else if ($_GET['email'] == "emailErr"){
        echo "<h4 style='color:red'>Format email salah</h4>";
    }
}

?>
    <h2 class="judul" align="center">Tambahkan Akun</h2>
    <div class="container">
    <form action="submitdata.php" method="POST">
         <div class="input"> Nama Akun  :
            <span class="error">*</span>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" >
            <br>
            Alamat Email :
            <span class="error">*</span>
            <input type="text" name="email" class="form-control">
            <br>
            Kata Sandi :
            <span class="error">*</span>
            <input type="password" name="password" class="form-control">
            <br>
            Tanggal Lahir   :
            <span class="error">*</span>
            <input type="date" name="tanggallahir" class="form-control">
            <br>
            Nomor Telp :
            <span class="error">*</span>
            <input type="text" name="nohp" class="form-control">
            <br>
            Jenis Kelamin   :
            <span class="error">*</span>
            <br>
            <input type="radio" name="jeniskelamin" value="Laki-laki">
            <label for="lk">Laki-laki</label>
            <input type="radio" name="jeniskelamin" value="Perempuan">
            <label for="pr">Perempuan</label><br>                        
            Jenis Akun         :
            <span class="error">*</span>
            <select class="form-control" name="jenis">
            <option>Administrator</option>
            <option>User</option>
            </select><br>
            
            
        <input id="submit-btn" type="submit" value="Tambahkan">
    </form>
</div>
</body>
</html>