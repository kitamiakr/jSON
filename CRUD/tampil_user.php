<h2>Manajemen User</h2>
<form method="POST" action="form_user.php">
	<input type="submit" name="submit" value="Tambah User">
</form>

<table>
	<tr>
		<th>No</th>
		<th>Username</th>
		<th>Nama lengkap</th>
		<th>Email</th>
		<th>Aksi</th>
	</tr>
	<?php
	include 'koneksi.php';
	$query = "SELECT * FROM users ORDER BY username";
	$tampil = mysqli_query($konek,$query);
	$no=1;
	while ($r=mysqli_fetch_array($tampil)) {
		# code...
		echo "<tr>
		<td>$no</td>
		<td>$$r[username]</td>
		<td>$r[nama_lengkap]</td>
		<td><a href=\"mailto:$r[email]\">$r[email]</a></td>
		<td><a href=\"edit_user.php?id=$r[username]\">Edit</a>|<a href=\"hapus_user.php?id=$r[username]\">Hapus</a></td>
		";
$no++;
	}
	?>
</table>