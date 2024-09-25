<h2>Data Barang</h2>
<a href="/barang/create">Tambah Barang</a>
<table>
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($barang as $item): ?>
        <tr>
            <td><?= $item['nama_barang']; ?></td>
            <td><?= $item['jenis_barang']; ?></td>
            <td>
                <a href="/barang/edit/<?= $item['id']; ?>">Edit</a>
                <a href="/barang/delete/<?= $item['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php if(session()->getFlashdata('status')): ?>
    <p><?= session()->getFlashdata('status'); ?></p>
<?php endif; ?>
