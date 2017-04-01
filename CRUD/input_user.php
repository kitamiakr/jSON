<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$input = "INSERT INTO users (username, password, nama_lengkap, email) VALUES('$username','$password','$nama_lengkap','$email')";

mysqli_query($koneksi, $input);
header("location:tampil_user.php");
?>