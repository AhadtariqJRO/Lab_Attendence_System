<?php


namespace App\Models;
use CodeIgniter\Model;

class MAttendanceModel extends Model
{
    protected $table = 'monthly';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'pak_number', 'total_days', 'presents',
        'absenties', 'leaves', 'casual_leaves', 'medical_leaves'];
}