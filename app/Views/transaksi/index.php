<h2>Data Transaksi</h2>
<a href="/transaksi/create">Tambah Transaksi</a>
<table>
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
        <?php foreach($transaksi as $item): ?>
        <tr>
            <td><?= $item['nama_barang'] ?></td>
            <td><?= $item['stok_awal'] ?></td>
            <td><?= $item['jumlah_terjual'] ?></td>
            <td><?= $item['tanggal_transaksi'] ?></td>
            <td>
                <a href="/transaksi/edit/<?= $item['id'] ?>">Edit</a>
                <a href="/transaksi/delete/<?= $item['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
