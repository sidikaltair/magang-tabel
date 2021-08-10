<?php

namespace App\Controllers;

use App\Models\kertasModel;
use App\Models\lemModel;
use App\Models\ModelKertas;
use App\Models\plastikModel;
use App\Models\tintaModel;
use App\Libraries\pdf;
use TCPDF;

class Supplier extends BaseController
{
    protected $kertasModel;
    public function __construct()
    {
        $this->kertasModel = new kertasModel();
        $this->plastikModel = new PlastikModel();
        $this->tintaModel = new tintaModel();
        $this->lemModel = new lemModel();
        $this->tgl = new kertasModel();
        $this->TCPDF = new TCPDF();
    }
    public function Kertas()
    {

        $kertas = $this->kertasModel->findAll();
        $data = [
            'title' => 'Kertas',
            'jumbo' => 'Kertas',
            'kertas' =>  $kertas,


        ];


        return view('subbahan/Kertas', $data);
    }

    public function save()
    {

        $model = new kertasModel();
        $data = ([
            'id_kertas' => $this->request->getPost('id_kertas'),
            'tanggal_pemesanan' => $this->request->getPost('tanggal_pemesanan'),
            'Nama_krts' => $this->request->getPost('Nama_krts'),
            'Jenis_ivo' => $this->request->getPost('Jenis_ivo'),
            'jumlah_rim' => $this->request->getPost('jumlah_rim'),
            'ukuran' => $this->request->getPost('ukuran'),
            'harga_sebelum' => $this->request->getPost('harga_sebelum'),
            'harga_sesudah' => $this->request->getPost('harga_sesudah'),
            'gramature' => $this->request->getPost('gramature'),

        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        $model->saveData($data);
        return redirect()->to('/Supplier/kertas');
    }
    public function pdf()
    {
        $model = new kertasModel;
        $data['kertas'] = $model->tampil('kertas')->getResult();
        $html = view('/button/inv/inv_kertas', $data);
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setCreator(PDF_CREATOR);
        $pdf->SetAuthor('Inventory');
        $pdf->SetTitle('<?= $title; ?>');
        $pdf->SetSubject('Inventory');
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(false);
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->writeHTML($html, true, false, true, false, '');
        $this->response->setContentType('application/pdf');
        $pdf->Output('inventory', 'I');
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
            'Jumlah_rol' => $this->request->getVar('Jumlah_rol'),
        ]);

        session()->setFlashdata('saveplastik', 'Data berhasil ditambahkan.');
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

    public function savetinta()
    {

        $model = new tintaModel();
        $data = ([
            'id_tinta' =>  $this->request->getVar('id_tinta'),
            'tanggal_pemesanan' => $this->request->getVar('tanggal_pemesanan'),
            'Nama_Spl' => $this->request->getVar('Nama_Spl'),
            'Jenis_tinta' => $this->request->getVar('Jenis_tinta'),
            'Turunan_tinta' => $this->request->getVar('Turunan_tinta'),
            'Jumlah_kaleng' => $this->request->getVar('Jumlah_kaleng'),
            'harga_sebelum' => $this->request->getVar('harga_sebelum'),
            'harga_sesudah' => $this->request->getVar('harga_sesudah'),

        ]);
        session()->setFlashdata('saveTinta', 'Data berhasil ditambahkan.');
        $model->saveTinta($data);


        return redirect()->to('/Supplier/Tinta');
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
    public function savelem()
    {
        $model = new lemModel();
        $data = ([
            'id_lem' =>  $this->request->getVar('id_lem'),
            'tanggal_pemesanan' => $this->request->getVar('tanggal_pemesanan'),
            'Nama_lem' => $this->request->getVar('Nama_lem'),
            'jumlah_drum' => $this->request->getVar('jumlah_drum'),

        ]);
        session()->setFlashdata('saveLem', 'Data berhasil ditambahkan.');
        $model->saveLem($data);
        return redirect()->to('/Supplier/lem');
    }
}
