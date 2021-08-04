<?php

namespace App\Models;

use CodeIgniter\Model;

class tintaModel extends Model
{

    protected $table = 'tinta';
    protected $primarykey = 'id_tinta';
    protected $timestamp = true;
    protected $allowedfield = [
        'id_tinta',
        'tanggal_pemesanan',
        'created_at',
        'Nama_Spl',
        'Jenis_tinta',
        'Turunan_tinta',
        'Jumlah_kaleng'

    ];
}
