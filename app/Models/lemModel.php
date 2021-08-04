<?php

namespace App\Models;

use CodeIgniter\Model;

class lemModel extends Model
{
    protected $table = 'lem';
    protected $primaryKey = 'id_lem';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['tanggal_pemesanan', 'created_at', 'Nama_lem', 'jumlah_drum'];
}
