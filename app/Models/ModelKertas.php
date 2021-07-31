<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKertas extends Model
{
    protected $table = 'kertas';
    protected $primaryKey = 'id_kertas';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['tanggal_pemesanan', 'created_at', 'Nama_krts', 'Jenis_ivo', 'Jumlah_rim', 'ukuran', 'gramature'];
    // protected function initialize()
    // {
    //     $this->allowedFields[] = 'kertas';
    // }
}
