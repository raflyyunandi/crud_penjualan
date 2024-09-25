<h2>Edit Data Barang</h2>

<form action="/barang/update/<?= $barang['id']; ?>" method="post">
    <?= csrf_field(); ?>
    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" id="nama_barang" value="<?= $barang['nama_barang']; ?>" required>

    <label for="jenis_barang">Jenis Barang:</label>
    <input type="text" name="jenis_barang" id="jenis_barang" value="<?= $barang['jenis_barang']; ?>" required>

    <button type="submit">Update</button>
</form>
