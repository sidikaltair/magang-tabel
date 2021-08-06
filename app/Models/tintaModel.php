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
        'Nama_Spl',
        'Jenis_tinta',
        'Turunan_tinta',
        'Jumlah_kaleng',
        'harga_sebelum',
        'harga_sesudah'

    ];

    public function saveTinta($data)
    {
        $query = $this->db->table('tinta')->insert($data);
        return $query;
    }
    public function deletetint($id)
    {
        $query = $this->db->table($this->table)->delete(['id_tinta' => $id]);
        return $query;
    }
}
