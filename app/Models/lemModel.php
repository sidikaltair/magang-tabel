<?php

namespace App\Models;

use CodeIgniter\Model;

class lemModel extends Model
{
    protected $table = 'lem';
    protected $primaryKey = 'id_lem';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['tanggal_pemesanan', 'Nama_lem', 'jumlah_drum'];

    public function saveLem($data)
    {
        $query = $this->db->table('lem')->insert($data);
        return $query;
    }

    public function deleteLem($id)
    {
        $query = $this->db->table($this->table)->delete(['id_lem' => $id]);
        return $query;
    }
}
