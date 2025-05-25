<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_inventory WHERE id_barang=$id"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Penambahan Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h2 class="mt-4">Penambahan Barang</h2>
    <form action="proses_penambahan.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id_barang'] ?>">
        <div class="mb-3">
            <label>Jumlah yang Ditambahkan</label>
            <input type="number" name="jumlah_tambah" class="form-control" required>
        </div>
        <button class="btn btn-success">Tambah</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
