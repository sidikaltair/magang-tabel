<?php

namespace App\Models;

use CodeIgniter\Model;

class plastikModel extends Model
{

    protected $table = 'plastik';
    protected $PrimaryKey = 'id_pls';
    protected $timestamp = true;
    protected $allowedfield = [
        'id_pls',
        'tanggal_pemesanan',
        'created_at',
        'Nama_pls',
        'Jenis_pls',
        'Jumlah_rol'
    ];

    public function savePlastik($data)
    {
        $query = $this->db->table('plastik')->insert($data);
        return $query;
    }

    public function delete_plastik($id)
    {
        $query = $this->db->table($this->table)->delete(['id_pls' => $id]);
        return $query;
    }
}
