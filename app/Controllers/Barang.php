<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class Barang extends Controller
{
    public function index()
    {
        $model = new BarangModel();
        $data['barang'] = $model->findAll();
        return view('barang/index', $data);
    }

    public function create()
    {
        return view('barang/create');
    }

    public function store()
    {
        $model = new BarangModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jenis_barang' => $this->request->getPost('jenis_barang'),
        ];
        $model->insert($data);
        return redirect()->to('/barang');
    }

    public function edit($id)
    {
        $model = new BarangModel();
        $data['barang'] = $model->find($id);
    
        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Barang tidak ditemukan.');
        }
    
        return view('barang/edit', $data);
    }
    
    public function update($id)
    {
        $model = new BarangModel();
        $data = [
            'nama_barang'  => $this->request->getPost('nama_barang'),
            'jenis_barang' => $this->request->getPost('jenis_barang'),
        ];
        $model->update($id, $data);
        return redirect()->to('/barang')->with('status', 'Data Barang berhasil diupdate.');
    }
    
    public function delete($id)
    {
        $model = new BarangModel();
        $model->delete($id);
        return redirect()->to('/barang')->with('status', 'Data Barang berhasil dihapus.');
    }
    }
