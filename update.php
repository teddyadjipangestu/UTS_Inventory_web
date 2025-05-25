<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_inventory WHERE id_barang=$id"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h2 class="mt-4">Edit Barang</h2>
    <form action="proses_update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id_barang'] ?>">
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama_barang'] ?>">
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="<?= $data['jumlah_barang'] ?>">
        </div>
        <div class="mb-3">
            <label>Satuan</label>
            <select name="satuan" class="form-control">
                <option <?= $data['satuan_barang'] == 'pcs' ? 'selected' : '' ?>>pcs</option>
                <option <?= $data['satuan_barang'] == 'kg' ? 'selected' : '' ?>>kg</option>
                <option <?= $data['satuan_barang'] == 'liter' ? 'selected' : '' ?>>liter</option>
                <option <?= $data['satuan_barang'] == 'meter' ? 'selected' : '' ?>>meter</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" step="0.01" name="harga" class="form-control" value="<?= $data['harga_beli'] ?>">
        </div>
        <div class="mb-3">
            <label>Status</label><br>
            <input type="radio" name="status" value="1" <?= $data['status_barang'] ? 'checked' : '' ?>> Available
            <input type="radio" name="status" value="0" <?= !$data['status_barang'] ? 'checked' : '' ?>> Not-Available
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
