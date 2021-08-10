<?php

namespace App\Models;

use CodeIgniter\Model;

class kertasModel extends Model
{
    protected $table = 'kertas';
    protected $primaryKey = 'id_kertas';
    protected $useTimestamps = true;
    protected $allowedFields = ['tanggal_pemesanan', 'Nama_krts', 'Jenis_ivo', 'Jumlah_rim', 'ukuran', 'harga_sebelum', 'harga_sesudah', 'gramature'];

    public function tampil($table)
    {
        $query =  $this->db->table($table);
        return $query->get();
    }

    public function saveData($data)
    {

        $query = $this->db->table('kertas')->insert($data);
        return $query;
    }

    public function update_product($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_kertas' => $id]);
    }

    public function delete_product($id)
    {
        $query = $this->db->table($this->table)->delete(['id_kertas' => $id]);
        return $query;
    }
    public function autocodekertas()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kertas');
        $query = $builder->get();
        $builder->selectMax('id_kertas');
        $query = $builder->get();

        return $query->id_kertas;
    }
}
