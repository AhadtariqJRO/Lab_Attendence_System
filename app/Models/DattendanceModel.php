<?php


namespace App\Models;
use CodeIgniter\Model;

class DattendanceModel extends Model
{
    protected $table = 'dailyattendance';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pak_number', 'status', 'reason','leave_type','created_on'];
}