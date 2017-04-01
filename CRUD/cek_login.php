<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$login = mysqli_query($konek,$query);
$ketemu = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if ($ketemu>0) {
	# code...
	session_start();
	$_SESSION['namauser']=$data['username'];
	$_SESSION['passuser']=$data['password'];
	header("location:form_berita.php");
}
else{
	echo "Login Gagal! Username dan Password tidak benar<br>";
	echo "<a href=\"form_login.php\">Ulangi Lagi</a>";
}
?>