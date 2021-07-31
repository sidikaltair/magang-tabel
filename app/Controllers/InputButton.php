<?php

namespace App\Controllers;

use App\Models\UserModel;

class InputButton extends BaseController
{
    public function create()
    {
        $data = [
            'title' => 'input Kertas',
            'jumbo' => 'Input Kertas Tabel',
            'create' => 'button/create'

        ];

        return view('button/create', $data);
    }

    public function createplastik()
    {
        $data = [
            'title' => 'input Plastik',
            'jumbo' => 'Input Plastik Tabel'
        ];


        return view('button/create', $data);
    }
}
