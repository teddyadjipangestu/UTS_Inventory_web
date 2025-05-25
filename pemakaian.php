<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_inventory WHERE id_barang=$id"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pemakaian Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h2 class="mt-4">Pemakaian Barang</h2>
    <form action="proses_pemakaian.php" method="POST" onsubmit="return validateJumlah(<?= $data['jumlah_barang'] ?>)">
        <input type="hidden" name="id" value="<?= $data['id_barang'] ?>">
        <div class="mb-3">
            <label>Jumlah yang Dipakai</label>
            <input type="number" id="jumlah_pakai" name="jumlah_pakai" class="form-control" required>
        </div>
        <button class="btn btn-warning">Kurangi</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <script>
        function validateJumlah(max) {
            let jumlah = parseInt(document.getElementById('jumlah_pakai').value);
            if (jumlah > max) {
                alert("Jumlah lebih besar dari stok!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
