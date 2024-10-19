<?php

namespace App\Models;

use CodeIgniter\Model;

class ClubMembershipModel extends Model
{
    protected $table = 'clubmembership';
    protected $primaryKey = 'id_membership';
    protected $allowedFields = ['id_club', 'id_user', 'role', 'join_date', 'status'];
}
