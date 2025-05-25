<?php
include 'koneksi.php';
$id = $_POST['id'];
$tambah = $_POST['jumlah_tambah'];

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_inventory WHERE id_barang=$id"));
$total = $data['jumlah_barang'] + $tambah;
$status = $total > 0 ? 1 : 0;

mysqli_query($conn, "UPDATE tb_inventory SET jumlah_barang=$total, status_barang=$status WHERE id_barang=$id");
header("Location: index.php");
