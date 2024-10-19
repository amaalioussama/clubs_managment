<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'id_event';
    protected $allowedFields = ['id_club', 'name', 'description', 'location', 'date', 'picture', 'background'];
}
