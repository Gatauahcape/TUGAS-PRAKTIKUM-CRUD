<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <title>Tampil Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset >
    <!--Judul pada fieldset-->
        <legend align="center">Toko Buku Muhammad Angga Nugraha</legend>
        <h3>
            <a href="index.php">Home</a> |
            <a href="admin.php">Admin</a> |
            <a href="Pengadaan.php">Pengadaan</a>
        </h3>
        <legend align="center">Selamat Datang Di Toko Kami</legend>
        <center><h1>Pencarian Produk</h1></center>
        <br>
        <form method="GET" action="index.php" style="text-align: center;">
        <label>Kata Pencarian : </label>
        <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo
        $_GET['kata_cari']; } ?>" />
        <button type="submit">Cari</button>
        </form>
<br>
<div class="table_keren">
    <table class="table_home">
        <thead>
        <tr>
        <th>Kode Buku</th>
        <th>Kategori</th>
        <th>Nama Buku</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Penerbit</th>
        </tr>   
        </thead>
    <?php
    //untuk meinclude kan koneksi
    include 'koneksi.php';
    //jika kita klik cari, maka yang tampil query cari ini
    if(isset($_GET['kata_cari'])) {
    //menampung variabel kata_cari dari form pencarian
    $kata_cari = $_GET['kata_cari'];
    $query = "SELECT * FROM tb_buku WHERE id_buku like '%".$kata_cari."%' OR
    nama_buku like '%".$kata_cari."%' ORDER BY id_buku ASC";
    } else {
    //jika tidak ada pencarian, default yang dijalankan query ini
    $query = "SELECT * FROM tb_buku ORDER BY id_buku ASC";
    }
    $result = mysqli_query($koneksi, $query);
    if(!$result) {
    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    //kalau ini melakukan foreach atau perulangan
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id_buku']; ?></td>
            <td><?php echo $row['kategori']; ?></td>
            <td><?php echo $row['nama_buku']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td><?php echo $row['penerbit']; ?></td>
        <?php
        }
        ?>
        </table>
    </fieldset>
</body>
</html>