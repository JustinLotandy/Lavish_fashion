<?php
include 'koneksi.php';
?>

<html>

<head>
    <title>Karyawan</title>
</head>

<body>
    <h1>Form Input Data Karyawan</h1>

    <form name="input_data" method="post" action="proses-input-Karyawan.php">
        <table border="0">

            <tr>
                <td>Kode Karyawan</td>
                <td>:</td>
                <td><input type="text" name="kode_karyawan" required></td>
            </tr>

            <tr>
                <td>Username Karyawan</td>
                <td>:</td>
                <td><input type="text" name="username_karyawan" /></td>
            </tr>

            <tr>
                <td>Password Karyawan</td>
                <td>:</td>
                <td><input type="text" name="password_karyawan" /></td>
            </tr>


            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td><input type="text" name="nama_karyawan" /></td>
            </tr>

            <tr>
                <td>Email Karyawan</td>
                <td>:</td>
                <td><input type="text" name="email_karyawan" /></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td> <input type="submit" name="tambah" value="SIMPAN"
                        onclick="return confirm('Apakah Anda yakin akan menyimpan data?')">
                </td>

        </table>
    </form>

    <a href="lihat-Karyawan.php">LIHAT DATA Karyawan</a>
</body>

</html>