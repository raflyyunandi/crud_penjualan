<h2>Tambah Transaksi</h2>

<form action="/transaksi/store" method="post">
    <label for="barang_id">Nama Barang:</label>
    <select name="barang_id" required>
        <?php foreach ($barang as $b): ?>
            <option value="<?= $b['id'] ?>"><?= $b['nama_barang'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label for="stok_awal">Stok Awal:</label>
    <input type="number" name="stok_awal" required><br>

    <label for="jumlah_terjual">Jumlah Terjual:</label>
    <input type="number" name="jumlah_terjual" required><br>

    <label for="tanggal_transaksi">Tanggal Transaksi:</label>
    <input type="date" name="tanggal_transaksi" required><br>

    <button type="submit">Simpan</button>
</form>
