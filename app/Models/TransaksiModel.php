<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['barang_id', 'stok_awal', 'jumlah_terjual', 'tanggal_transaksi'];
}
