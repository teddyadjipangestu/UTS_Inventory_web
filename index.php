<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h2 class="mt-4">Daftar Inventory Barang</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Barang</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th><th>Nama</th><th>Jumlah</th><th>Satuan</th><th>Harga</th><th>Status</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM tb_inventory");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['kode_barang']}</td>
                    <td>{$row['nama_barang']}</td>
                    <td>{$row['jumlah_barang']}</td>
                    <td>{$row['satuan_barang']}</td>
                    <td>Rp " . number_format($row['harga_beli'],2,",",".") . "</td>
                    <td>" . ($row['status_barang'] ? 'Available' : 'Not-Available') . "</td>
                    <td>
                        <a href='update.php?id={$row['id_barang']}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='pemakaian.php?id={$row['id_barang']}' class='btn btn-info btn-sm'>Pakai</a>
                        <a href='penambahan.php?id={$row['id_barang']}' class='btn btn-success btn-sm'>Tambah</a>
                        <a href='hapus.php?id={$row['id_barang']}' onclick=\"return confirm('Yakin ingin hapus?')\" class='btn btn-danger btn-sm'>Hapus</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
