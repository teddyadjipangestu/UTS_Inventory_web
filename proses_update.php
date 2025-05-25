<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$status = $_POST['status'];

$query = "UPDATE tb_inventory SET
    nama_barang='$nama',
    jumlah_barang=$jumlah,
    satuan_barang='$satuan',
    harga_beli=$harga,
    status_barang=$status
    WHERE id_barang=$id";

mysqli_query($conn, $query);
header("Location: index.php");
