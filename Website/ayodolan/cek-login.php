<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from pendaftaran where email_pelanggan='$username' and kataSandi_pelanggan='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$qry = mysqli_fetch_array($data);
	$_SESSION['username'] 		= $username;
	$_SESSION['id_pelanggan']   = $qry['id_pelanggan'];
	$_SESSION['status'] 		= "login";
	header("location:index.php");
}else{
	header("location:Login.php?pesan=gagal");
}
?>