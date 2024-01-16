<?php
include "koneksi.php";
// menangkap data yang di kirim dari form
$id_penerbit = $_POST['id_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon= $_POST['telepon'];
// menginput data ke database
$query = "INSERT INTO tb_penerbit VALUES ('$id_penerbit','$nama_penerbit','$alamat','$kota','$telepon')";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Keterangan penerbit berhasil ditambahkan');location='pengadaan.php';</script>";
}
?>