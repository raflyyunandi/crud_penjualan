<h2>Daftar Transaksi</h2>
<a href="/transaksi/create">Tambah Transaksi</a>

<table border="1">
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Stok Awal</th>
            <th>Jumlah Terjual</th>
            <th>Tanggal Transaksi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transaksi as $t): ?>
        <tr>
            <td><?= $t['nama_barang'] ?></td>
            <td><?= $t['stok_awal'] ?></td>
            <td><?= $t['jumlah_terjual'] ?></td>
            <td><?= $t['tanggal_transaksi'] ?></td>
            <td>
                <a href="/transaksi/edit/<?= $t['id'] ?>">Edit</a>
                <a href="/transaksi/delete/<?= $t['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
