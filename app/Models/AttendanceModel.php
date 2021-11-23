<?php


namespace App\Models;
use CodeIgniter\Model;

class AttendanceModel extends Model
{
    protected $table = 'attendance';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pak_number', 'date', 'present_absent'];
}