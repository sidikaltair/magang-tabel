<?php

namespace App\Models;

use CodeIgniter\Model;

class kertasModel extends Model
{
    protected $table = 'kertas';
    protected $primaryKey = 'id_kertas';
    protected $useTimestamps = true;
    protected $allowedFields = ['tanggal_pemesanan', 'created_at', 'Nama_krts', 'Jenis_ivo', 'Jumlah_rim', 'ukuran', 'gramature'];

    public function saveData($data)
    {
        $query = $this->db->table('kertas')->insert($data);
        return $query;
    }

    public function autocodekertas()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kertas');
        $query = $builder->get();
        $builder->selectMax('id_kertas');
        $query = $builder->get();
        return $query;
    }
}
