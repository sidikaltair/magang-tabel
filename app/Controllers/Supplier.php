<?php

namespace App\Controllers;

use App\Models\ModelKertas;

class Supplier extends BaseController
{
    protected $modelkertas;
    public function __construct()
    {
        $this->modelKertas = new ModelKertas();
    }
    public function Kertas()
    {
        $kertas = $this->modelKertas->findAll();

        $data = [
            'title' => 'Kertas',
            'jumbo' => 'Kertas',
            'kertas' =>  $kertas,
        ];


        return view('subbahan/Kertas', $data);
    }
    public function save()
    {
        $this->data->save([
            'id_kertas' =>  $this->request->getVar('id_kertas'),
            'tanggal_pemesanan' => $this->request->getVar('tanggal_pemesanan'),
            'created_at' =>  $this->request->getVar('created_at'),
            'Nama_krts' => $this->request->getVar('Nama_krts'),
            'Jenis_ivo' => $this->request->getVar('Jenis_ivo'),
            'jumlah_rim' => $this->request->getVar('jumlah_rim'),
            'ukuran' => $this->request->getVar('ukuran'),
            'gramature' => $this->request->getVar('gramature')
        ]);


        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('subbahan/kertas');
    }


    public function Lem()
    { {
            $data = [
                'title' => 'Lem',
                'jumbo' => 'Lem'
            ];
            return view('subbahan/Lem', $data);
        }
    }


    public function Plastik()
    { {
            $data = [
                'title' => 'Plastik',
                'jumbo' => 'Plastik'
            ];
            return view('subbahan/Plastik', $data);
        }
    }


    public function Tinta()
    { {
            $data = [
                'title' => 'Tinta',
                'jumbo' => 'Tinta'
            ];
            return view('subbahan/tinta', $data);
        }
    }
}
