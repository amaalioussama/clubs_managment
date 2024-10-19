<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visitor';
    protected $primaryKey = 'id_visitor';
    protected $allowedFields = ['name', 'email'];
}
