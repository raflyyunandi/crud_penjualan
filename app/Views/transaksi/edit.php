<h2>Edit Data Transaksi</h2>

<form action="/transaksi/update/<?= $transaksi['id']; ?>" method="post">
    <?= csrf_field(); ?>
    <label for="barang_id">Nama Barang:</label>
    <select name="barang_id" id="barang_id" required>
        <?php foreach ($barang as $item): ?>
            <option value="<?= $item['id']; ?>" <?= ($item['id'] == $transaksi['barang_id']) ? 'selected' : ''; ?>>
                <?= $item['nama_barang']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="stok_awal">Stok Awal:</label>
    <input type="number" name="stok_awal" id="stok_awal" value="<?= $transaksi['stok_awal']; ?>" required>

    <label for="jumlah_terjual">Jumlah Terjual:</label>
    <input type="number" name="jumlah_terjual" id="jumlah_terjual" value="<?= $transaksi['jumlah_terjual']; ?>" required>

    <label for="tanggal_transaksi">Tanggal Transaksi:</label>
    <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" value="<?= $transaksi['tanggal_transaksi']; ?>" required>

    <button type="submit">Update</button>
</form>
