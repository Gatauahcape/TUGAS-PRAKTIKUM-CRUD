<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_buku = $_POST['id_buku'];
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit= $_POST['penerbit'];
// update data ke database
$query = "UPDATE tb_buku SET kategori='$kategori', nama_buku='$nama_buku', harga='$harga', stok='$stok', penerbit='$penerbit' WHERE id_buku='$id_buku'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Buku berhasil diedit');location='admin.php';</script>";
    }
?>