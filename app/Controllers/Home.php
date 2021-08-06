<?php

namespace App\Controllers;

use App\Models\clientModel;

class Home extends BaseController
{
	public function Dashboard()
	{
		$data = [
			'title' => 'HOME | dashboard',
			'jumbo' => 'Dashboard'
		];

		return view('dashboard', $data);
	}

	public function Supplier()
	{
		$data = [
			'title' => 'Supplier',
			'jumbo' => 'Supplier'
		];
		return view('layout/supplier', $data);
	}
	public function Client()

	{
		$this->clientModel = new clientModel();
		$client = $this->clientModel->findAll();
		$data = [
			'title' => 'Client',
			'jumbo' => 'Client',
			'client' => $client

		];
		return view('layout/client', $data);
	}
	public function saveClient()
	{
		$model = new clientModel();
		$data = ([
			'no_id' =>  $this->request->getPost('no_id'),
			'nama_client' => $this->request->getPost('nama_client'),
			'nama_barang' => $this->request->getPost('nama_barang'),
			'stok_gudang' => $this->request->getPost('stok_gudang'),
			'jumlah_barang' => $this->request->getPost('jumlah_barang'),
			'area_kirim' => $this->request->getPost('area_kirim'),
			'tanggal_kirim' => $this->request->getPost('tanggal_kirim'),
			'total_harga' => $this->request->getPost('total_harga'),

		]);

		session()->setFlashdata('saveClient', 'Data berhasil ditambahkan.');
		$model->saveData($data);
		return redirect()->to('/Home/client');
	}

	public function Produk()

	{
		$data = [
			'title' => 'Produk',
			'jumbo' => 'Produk'
		];
		return view('layout/produk', $data);
	}
}
