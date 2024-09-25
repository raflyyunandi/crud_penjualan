<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['barang_id', 'stok_awal', 'jumlah_terjual', 'tanggal_transaksi'];

    // Optional: Custom method untuk mendapatkan nama barang
    public function getTransaksiWithBarang()
    {
        return $this->select('transaksi.*, barang.nama_barang')
                    ->join('barang', 'transaksi.barang_id = barang.id')
                    ->findAll();
    }
}
