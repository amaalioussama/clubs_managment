<?php

namespace App\Models;

use CodeIgniter\Model;

class EventRequestModel extends Model
{
    protected $table = 'eventrequest';
    protected $primaryKey = 'id_request';
    protected $allowedFields = ['id_club', 'id_visitor', 'id_event', 'status', 'request_date'];
}
