<?php

namespace App\Controllers;

// use App\Controllers\BaseController;
// use CodeIgniter\HTTP\ResponseInterface;

use App\Models\BarangModel;
use CodeIgniter\RESTful\ResourceController;

class ApiBarang extends ResourceController
{
    protected $format = 'json'; // Format output JSON

    public function index()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();
        return $this->respond($data);  // Kembalikan data dalam bentuk JSON
    }

    public function show($id = null)
    {
        $model = new BarangModel();
        $data = $model->find($id);

        if (!$data) {
            return $this->failNotFound('Data barang tidak ditemukan.');
        }

        return $this->respond($data);
    }

    public function create()
    {
        $model = new BarangModel();
        $data = [
            'nama_barang'  => $this->request->getPost('nama_barang'),
            'jenis_barang' => $this->request->getPost('jenis_barang'),
        ];

        if ($model->insert($data)) {
            return $this->respondCreated($data, 'Barang berhasil ditambahkan.');
        } else {
            return $this->fail('Gagal menambahkan barang.');
        }
    }

    public function update($id = null)
    {
        $model = new BarangModel();
        $data = [
            'nama_barang'  => $this->request->getRawInput()['nama_barang'],
            'jenis_barang' => $this->request->getRawInput()['jenis_barang'],
        ];

        if ($model->update($id, $data)) {
            return $this->respond($data, 200, 'Data barang berhasil diupdate.');
        } else {
            return $this->fail('Gagal memperbarui barang.');
        }
    }

    public function delete($id = null)
    {
        $model = new BarangModel();

        if ($model->delete($id)) {
            return $this->respondDeleted('Barang berhasil dihapus.');
        } else {
            return $this->fail('Gagal menghapus barang.');
        }
    }
}
