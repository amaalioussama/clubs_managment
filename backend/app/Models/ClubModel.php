<?php

namespace App\Models;

use CodeIgniter\Model;

class ClubModel extends Model
{
    protected $table = 'clubs'; // Table name
    protected $primaryKey = 'id'; // Primary key (assuming `id` is auto-incremented)
    protected $allowedFields = ['id_president','name', 'description', 'logo', 'background', 'qr_code', 'status']; // Fields that can be inserted/updated
}

