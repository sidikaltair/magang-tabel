<?php

namespace App\Controllers;

use App\Models\kertasModel;
use App\Models\lemModel;
use App\Models\ModelKertas;
use App\Models\plastikModel;
use App\Models\tintaModel;

class Supplier extends BaseController
{
    protected $kertasModel;
    public function __construct()
    {
        $this->kertasModel = new kertasModel();
        $this->plastikModel = new PlastikModel();
        $this->tintaModel = new tintaModel();
        $this->lemModel = new lemModel();
    }
    public function Kertas()
    {

        $kertas = $this->kertasModel->findAll();
        $data = [
            'title' => 'Kertas',
            'jumbo' => 'Kertas',
            'kertas' =>  $kertas
        ];


        return view('subbahan/Kertas', $data);
    }
    public function save()
    {
        $model = new kertasModel();
        $data = ([
            'id_kertas' =>  $this->request->getPost('id_kertas'),
            'tanggal_pemesanan' => $this->request->getPost('tanggal_pemesanan'),
            'created_at' =>  $this->request->getPost('created_at'),
            'Nama_krts' => $this->request->getPost('Nama_krts'),
            'Jenis_ivo' => $this->request->getPost('Jenis_ivo'),
            'jumlah_rim' => $this->request->getPost('jumlah_rim'),
            'ukuran' => $this->request->getPost('ukuran'),
            'gramature' => $this->request->getPost('gramature')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        $model->saveData($data);
        return redirect()->to('/Supplier/kertas');
    }


    public function Plastik()
    {
        $plastik = $this->plastikModel->findAll();

        $data = [
            'title' => 'Plastik',
            'jumbo' => 'Plastik',
            'plastik' => $plastik
        ];
        return view('subbahan/Plastik', $data);
    }

    public function savePlastik()
    {
        $model = new plastikModel();
        $data = ([
            'id_Pls' =>  $this->request->getVar('id_Pls'),
            'tanggal_pemesanan' => $this->request->getVar('tanggal_pemesanan'),
            'created_at' =>  $this->request->getVar('created_at'),
            'Nama_pls' => $this->request->getVar('Nama_pls'),
            'Jenis_pls' => $this->request->getVar('Jenis_pls'),
            'jumlah_rol' => $this->request->getVar('jumlah_rol'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        $model->savePlastik($data);
        return redirect()->to('/Supplier/Plastik');
    }
    public function Tinta()
    {
        $tinta = $this->tintaModel->findAll();
        $data = [
            'title' => 'Tinta',
            'jumbo' => 'Tinta',
            'tinta' => $tinta
        ];
        return view('subbahan/tinta', $data);
    }


    public function Lem()
    {
        $lem = $this->lemModel->findAll();
        $data = [
            'title' => 'Lem',
            'jumbo' => 'Lem',
            'lem' => $lem
        ];
        return view('subbahan/Lem', $data);
    }
}
