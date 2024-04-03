<?php
include 'koneksi.php';
?>

<html>

<head>
    <title>Karyawan</title>
</head>

<body>
    <h1>Lihat Data karyawan <a href="home.php">(Back to Home)</a></h1>

    <a href="input-karyawan.php">+ TAMBAH DATA karyawan</a>

    <table border="1">
        <tr>
            <td>NO.</td>
            <td>KODE KARYAWAN</td>
            <td>USERNAME KARYAWAN</td>
            <td>NAMA KARYAWAN</td>
            <td>EMAIL</td>
            <td>AKSI</td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM  karyawan");

        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>
                <td>
                    <?php echo $data['kode_karyawan']; ?>
                </td>
                <td>
                    <?php echo $data['username_karyawan']; ?>
                </td>
                <td>
                    <?php echo $data['nama_karyawan']; ?>
                </td>
                <td>
                    <?php echo $data['email_karyawan']; ?>
                </td>
                <td>
                    <a href="edit-karyawan.php?id=<?php echo $data['id_karyawan']; ?>"> EDIT</a>
                    <a href="delete-karyawan.php?id=<?php echo $data['id_karyawan']; ?>"
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