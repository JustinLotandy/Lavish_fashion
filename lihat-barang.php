<?php
include 'koneksi.php';
?>

<html>

<head>
    <title>Barang</title>
</head>

<body>

    <h1>Lihat Data Barang <a href="home.php">(Back to Home)</a></h1>

    <a href="input-barang.php">+ TAMBAH DATA BARANG</a>

    <table border="1">

        <tr>
            <th>NO.</th>
            <th>KODE BARANG</th>
            <th>NAMA BARANG</th>
            <th>HARGA BARANG</th>
            <th>JUMLAH BARANG</th>
            <th>KATEGORI BARANG</th>
        </tr>

        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM barang");

        $no = 1;

        while ($data = mysqli_fetch_array($query)) {

            ?>
        <tr>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $data['kode_barang']; ?>
            </td>
            <td>
                <?php echo $data['nama_barang']; ?>
            </td>
            <td>
                <?php echo $data['harga_barang']; ?>
            </td>
            <td>
                <?php echo $data['jumlah_barang']; ?>
            </td>
            <td>
                <?php echo $data['kategori_barang']; ?>
            </td>
            <td>
                <a href="edit-barang.php?id=<?php echo $data['id_barang']; ?>">
                    EDIT </a>

                ||

                <a href="proses-hapus-barang.php?id=<?php echo $data['id_barang']; ?>"
                    onclick="return confirm('Apakah Anda yakin akan menghapus data?')">

                    HAPUS</a>

            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
    </table>

</body>

</html>