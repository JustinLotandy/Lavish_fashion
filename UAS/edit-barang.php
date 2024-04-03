<?php
include 'koneksi.php';
?>

<html>

<head>
    <title>Barang</title>
</head>


<body>
    <h1>Form Ubah Data barang</h1>

    <?php
    $ambilid = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$ambilid'");
    $data = mysqli_fetch_array($query);
    ?>

    <form method="POST" action="proses-edit-barang.php">
        <table border="0">

            <tr>
                <td>ID barang</td>
                <td>:</td>
                <td>
                    <input type="text" name="id_barang" required value="<?php echo $data['id_barang']; ?>" readonly>
                </td>
            </tr>

            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode_barang" required value="<?php echo $data['kode_barang']; ?>" readonly>
                </td>
            </tr>

            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang" required value="<?php echo $data['nama_barang']; ?>"></td>
            </tr>

            <tr>
                <td>Harga Barang</td>
                <td>:</td>
                <td><input type="text" name="harga_barang" required value="<?php echo $data['harga_barang']; ?>"></td>
            </tr>

            <tr>
                <td>Jumlah Barang</td>
                <td>:</td>
                <td><input type="text" name="jumlah_barang" required value="<?php echo $data['jumlah_barang']; ?>"></td>
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
                <td> <input type="submit" name="ubah" value="UPDATE DATA"
                        onclick="return confirm('Apakah Anda yakin akan mengubah data?')">
                </td>
            </tr>
        </table>
    </form>
    <a href="lihat-barang.php">LIHAT DATA barang</a>
</body>

</html>