<?php

namespace App\Controllers;

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
		$data = [
			'title' => 'Client',
			'jumbo' => 'Client'
		];
		return view('layout/client', $data);
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
