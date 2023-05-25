<?php

namespace App\Models;

use CodeIgniter\Model;

class M_product extends Model
{
    protected $table      = "product";
    protected $primaryKey = "kode_product";
    protected $useTimestamps = false;
    protected $allowedFields = ["kode_product", "name_product", "description", "price", "stock", "picture"];

    protected $deleteField = "delete_at";
    protected $updatedField         = 'updated_at';
}
