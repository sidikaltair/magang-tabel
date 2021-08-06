<?php

namespace App\Models;

use CodeIgniter\Model;

class clientModel extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'no_id';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['nama_client', 'nama_barang', 'stok_gudang', 'jumlah_barang', 'area_kirim', 'tanggal_kirim', 'total_harga'];

    public function saveClient($data)
    {
        $query = $this->db->table('client')->insert($data);
        return $query;
    }

    public function deletecli($id)
    {
        $query = $this->db->table($this->table)->delete(['no_id' => $id]);
        return $query;
    }
}
