<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h2 class="mt-4">Tambah Barang</h2>
    <form action="proses_tambah.php" method="POST">
        <div class="mb-3">
            <label>Kode Barang</label>
            <input type="text" name="kode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Satuan</label>
            <select name="satuan" class="form-control">
                <option value="pcs">pcs</option>
                <option value="kg">kg</option>
                <option value="liter">liter</option>
                <option value="meter">meter</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Harga Beli</label>
            <input type="number" step="0.01" name="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label><br>
            <input type="radio" name="status" value="1" checked> Available
            <input type="radio" name="status" value="0"> Not-Available
        </div>
        <button class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
