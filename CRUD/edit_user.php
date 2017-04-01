<?php
include 'koneksi.php';

$edit = "SELECT * FROM users WHERE username='$_GET[id]'";
$hasil = mysqli_query($konek,$edit);
$r = mysql_fetch_array($hasil);

echo "<h2>Edit User</h2>
<form method=\"POST\" action=\"update_user.php\">
<input type=\"hidden\" name=\"id\" value=\"$r[username]\">
Username :
<input type=\"text\" name=\"username\" value=\"$r[username]\">

Password:
<input type=\"text\" name=\"password\">

Nama Lengkap :
<input type=\"text\" name=\"nama_lengkap\" value=\"$r[nama_lengkap]\">

E-mail :
<input type=\"text\" name=\"email\" value=\"$r[email]\">

<input type=\"submit\" value=\"Update\">
<input type=\"submit\" value=\"Batal\">
</form>";
?>