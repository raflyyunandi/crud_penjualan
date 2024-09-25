<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use CodeIgniter\RESTful\ResourceController;

class ApiTransaksi extends ResourceController
{
    protected $modelName = 'App\Models\TransaksiModel';
    protected $format    = 'json';

    // Mendapatkan semua data transaksi
    public function index()
    {
        $data = $this->model->getTransaksiWithBarang(); // Mendapatkan transaksi beserta nama barang
        return $this->respond($data);
    }

    // Mendapatkan transaksi berdasarkan ID
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        }
        return $this->failNotFound('Transaksi tidak ditemukan');
    }

    // Menambahkan transaksi baru
    public function create()
    {
        $data = [
            'barang_id'         => $this->request->getPost('barang_id'),
            'stok_awal'         => $this->request->getPost('stok_awal'),
            'jumlah_terjual'    => $this->request->getPost('jumlah_terjual'),
            'tanggal_transaksi' => $this->request->getPost('tanggal_transaksi'),
        ];

        $this->model->insert($data);
        return $this->respondCreated($data, 'Transaksi berhasil ditambahkan');
    }

    // Mengupdate transaksi berdasarkan ID
    public function update($id = null)
    {
        $data = [
            'barang_id'         => $this->request->getPost('barang_id'),
            'stok_awal'         => $this->request->getPost('stok_awal'),
            'jumlah_terjual'    => $this->request->getPost('jumlah_terjual'),
            'tanggal_transaksi' => $this->request->getPost('tanggal_transaksi'),
        ];

        $this->model->update($id, $data);
        return $this->respond($data, 'Transaksi berhasil diperbarui');
    }

    // Menghapus transaksi berdasarkan ID
    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted('Transaksi berhasil dihapus');
    }
}
