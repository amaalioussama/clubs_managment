<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_club', 'name', 'description', 'location', 'date', 'picture', 'background','created_at'];
    protected $useTimestamps = true;
    
}
