<?php
include 'koneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$status = $_POST['status'];

$query = "INSERT INTO tb_inventory (kode_barang, nama_barang, jumlah_barang, satuan_barang, harga_beli, status_barang)
VALUES ('$kode', '$nama', $jumlah, '$satuan', $harga, $status)";

mysqli_query($conn, $query);
header("Location: index.php");
