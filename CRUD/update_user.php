<?php
include 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];

if (empty($password)) {
	# code...
	$update = "UPDATE users SET username = '$username',
								nama_lengkap = '$nama_lengkap',
								email = '$email'
								WHERE username = '$id'";
	mysqli_query($konek, $update);
}
else{
	$pass = md5($password);
	$update ="UPDATE users SET username = '$username',
								password ='$pass',
								nama_lengkap ='$nama_lengkap',
								email= '$email'
								WHERE username = '$id'";
	mysqli_query($konek, $update);
}
header("location:tampil_user.php");
?>