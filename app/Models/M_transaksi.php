<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Transaksi extends Model
{
    protected $table      = "transaksi";
    protected $primaryKey = "id";
    protected $useTimestamps = false;
    protected $allowedFields = ["id", "date", "id_barang", "id_pembeli", "qty", "total_harga", "alamat", "status"];

    protected $deleteField = "delete_at";
    protected $updatedField         = 'updated_at';
}
