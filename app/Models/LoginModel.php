<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table      = "user";
    protected $primaryKey = "id";
    protected $useTimestamps = false;
    protected $allowedFields = ["id", "username", "password", "role",];

    protected $deleteField = "delete_at";
}
