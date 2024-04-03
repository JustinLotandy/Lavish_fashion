<?php
include 'koneksi.php';
?>

<html>

<head>
	<title>E-Library</title>
</head>


<body>
	<h1>Form Ubah Data karyawan</h1>

	<?php
	$ambilid = $_GET['id'];
	$query = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan = '$ambilid'");
	$data = mysqli_fetch_array($query);
	?>

	<form method="POST" action="proses-edit-karyawan.php">
		<table border="0">
			<tr>
				<td>ID karyawan</td>
				<td>:</td>
				<td>
					<input type="text" name="id_karyawan" required value="<?php echo $data['id_karyawan']; ?>" readonly>
				</td>
			</tr>

			<tr>
				<td>Kode karyawan</td>
				<td>:</td>
				<td>
					<input type="text" name="kode_karyawan" required value="<?php echo $data['kode_karyawan']; ?>">
				</td>
			</tr>

			<tr>
				<td>Username karyawan</td>
				<td>:</td>
				<td>
					<input type="text" name="username_karyawan" required
						value="<?php echo $data['username_karyawan']; ?>">
				</td>
			</tr>

			<tr>
				<td>Nama karyawan</td>
				<td>:</td>
				<td><input type="text" name="nama_karyawan" required value="<?php echo $data['nama_karyawan']; ?>">
				</td>
			</tr>

			<tr>
				<td>Email karyawan</td>
				<td>:</td>
				<td><input type="text" name="email_karyawan" required value="<?php echo $data['email_karyawan']; ?>">
				</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td> <input type="submit" name="ubah" value="UPDATE DATA"
						onclick="return confirm('Apakah Anda yakin akan mengubah data?')">
				</td>
			</tr>
		</table>
	</form>
	<a href="lihat-karyawan.php">LIHAT DATA karyawan</a>
</body>

</html>