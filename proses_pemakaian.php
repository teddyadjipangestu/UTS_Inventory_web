<?php
include 'koneksi.php';
$id = $_POST['id'];
$pakai = $_POST['jumlah_pakai'];

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_inventory WHERE id_barang=$id"));
$sisa = $data['jumlah_barang'] - $pakai;

if ($sisa < 0) {
    echo "Gagal: jumlah pemakaian melebihi stok.";
    exit;
}

$status = $sisa == 0 ? 0 : 1;

mysqli_query($conn, "UPDATE tb_inventory SET jumlah_barang=$sisa, status_barang=$status WHERE id_barang=$id");
header("Location: index.php");
