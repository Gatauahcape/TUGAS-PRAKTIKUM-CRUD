<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_penerbit = $_POST['id_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon= $_POST['telepon'];
// menginput data ke database
$query = "UPDATE tb_penerbit SET nama_penerbit='$nama_penerbit', alamat='$alamat', kota='$kota', telepon='$telepon' WHERE id_penerbit='$id_penerbit'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Data Penerbit berhasil diedit');location='pengadaan.php';</script>";
    }
?>