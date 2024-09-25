<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\BarangModel;
use CodeIgniter\Controller;

class Transaksi extends Controller
{
    public function index()
    {
        $model = new TransaksiModel();
        $data['transaksi'] = $model->select('transaksi.*, barang.nama_barang')
                                   ->join('barang', 'barang.id = transaksi.barang_id')
                                   ->findAll();
        return view('transaksi/index', $data);
    }

    public function create()
    {
        $barangModel = new BarangModel();
        $data['barang'] = $barangModel->findAll();
        return view('transaksi/create', $data);
    }

    public function store()
    {
        $model = new TransaksiModel();
        $data = [
            'barang_id' => $this->request->getPost('barang_id'),
            'stok_awal' => $this->request->getPost('stok_awal'),
            'jumlah_terjual' => $this->request->getPost('jumlah_terjual'),
            'tanggal_transaksi' => $this->request->getPost('tanggal_transaksi'),
        ];
        $model->insert($data);
        return redirect()->to('/transaksi');
    }

    public function edit($id)
    {
        $model = new TransaksiModel();
        $barangModel = new BarangModel();
    
        $data['transaksi'] = $model->find($id);
        $data['barang']    = $barangModel->findAll();
    
        if (empty($data['transaksi'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Transaksi tidak ditemukan.');
        }
    
        return view('transaksi/edit', $data);
    }
    
    public function update($id)
    {
        $model = new TransaksiModel();
        $data = [
            'barang_id'         => $this->request->getPost('barang_id'),
            'stok_awal'         => $this->request->getPost('stok_awal'),
            'jumlah_terjual'    => $this->request->getPost('jumlah_terjual'),
            'tanggal_transaksi' => $this->request->getPost('tanggal_transaksi'),
        ];
        $model->update($id, $data);
        return redirect()->to('/transaksi')->with('status', 'Data Transaksi berhasil diupdate.');
    }
    
    public function delete($id)
    {
        $model = new TransaksiModel();
        $model->delete($id);
        return redirect()->to('/transaksi')->with('status', 'Data Transaksi berhasil dihapus.');
    }
    
}
