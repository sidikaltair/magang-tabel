<?php

namespace App\Controllers;

use App\Models\clientModel;
use App\Models\kertasModel;
use App\Models\lemModel;
use App\Models\plastikModel;
use App\Models\tintaModel;
use TCPDF;

class InputButton extends BaseController

{
    public function __construct()
    {
        $this->product = new kertasModel();
        $this->productpls = new plastikModel();
        $this->producttinta = new tintaModel();
        $this->productlem = new lemModel();
        $this->productcli = new ClientModel();
        $this->TCDF = new TCPDF();
        $this->ClientModel = new ClientModel();
    }

    public function createClient()
    {

        $this->ClientModel = new ClientModel();
        $query = $this->ClientModel->autocodeclient();
        $nourut = (int)substr($query, 3, 4);
        $kodeBarangSekarang = $nourut + 1;
        $data = array('no_id' => $kodeBarangSekarang);
        $data = [
            'title' => 'Client',
            'jumbo' => 'Client'
        ];
        return view('button/createclient', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'input Kertas',
            'jumbo' => 'Input Kertas Tabel'

        ];

        return view('button/create', $data);
    }

    public function createplastik()
    {
        $data = [
            'title' => 'input Plastik',
            'jumbo' => 'Input Plastik Tabel'
        ];


        return view('button/createpls', $data);
    }
    public function createTinta()
    {
        $data = [
            'title' => 'input tinta',
            'jumbo' => 'Input Tinta Tabel'
        ];
        return view('button/createTinta', $data);
    }

    public function deletetinta($id)
    {
        $hapus = $this->producttinta->deletetint($id);

        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('deltinta', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('/supplier/tinta'));
        }
    }
    public function deleteclient($id)
    {
        $hapus = $this->productcli->deletecli($id);

        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('delcli', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('/home/client'));
        }
    }


    public function createLem()
    {
        $data = [
            'title' => 'input Lem',
            'jumbo' => 'Input Lem'
        ];

        return view('button/createLem', $data);
    }

    public function deleteLem($id)
    {

        $hapus = $this->productlem->deletelem($id);

        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('dellem', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('/supplier/lem'));
        }
    }
    public function edit()
    {
        $model = new kertasModel();
    }

    public function deletekrts($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus

        $hapus = $this->product->delete_product($id);

        // Jika berhasil melakukan hapus
        if ($hapus) {
            // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('/supplier/kertas'));
        }
    }

    public function deletepls($id)
    {

        $hapus = $this->productpls->delete_plastik($id);

        if ($hapus) {

            session()->setFlashdata('delplas', 'plastik berhasil di delete');

            return redirect()->to(base_url('/supplier/plastik'));
        }
    }

    // public function invoice()
    // {
    //     $id = $this->request->uri->getSegment(3);

    //     $kertas = $this->product->find($id);


    //     $tinta = $this->producttinta->find($id);

    //     $plastik = $this->productpls->find($id);

    //     $lem = $this->productlem->find($id);
    //     $html = ([
    //         'kertas' => $kertas,
    //         'tinta' => $tinta,
    //         'plastik' => $plastik,
    //         'lem' => $lem,
    //     ]);

    // return view('subbahan/invoice', $html);

}
