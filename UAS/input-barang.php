<?php
include 'koneksi.php';
?>

<html>

<head>
    <title>barang</title>
</head>

<body>

    <h1>Form Input Data Barang</h1>
    <form name="input_data" method="POST" action="proses-input-barang.php">
        <table border="0">
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode_barang" required></td>
            </tr>

            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang" required></td>
            </tr>

            <tr>
                <td>Harga BArang</td>
                <td>:</td>
                <td><input type="text" name="harga_barang" required></td>
            </tr>

            <tr>
                <td>Jumlah Barang</td>
                <td>:</td>
                <td><input type="text" name="jumlah_barang" required></td>
            </tr>

            <tr>
                <td>Kategori Barang</td>
                <td>:</td>
                <td>
                    <select class="form-control" name="kategori_barang">
                        <option> Baju Pria </option>
                        <option> Baju Wanita </option>
                        <option> Baju anak-anak </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td> <input type="submit" name="tambah" value="SIMPAN"
                        onclick="return confirm('Apakah Anda yakin akan menyimpan data?')">
                </td>
            </tr>
        </table>
    </form>
    <a href="lihat-barang.php">LIHAT DATA BARANG</a>
</body>

</html>