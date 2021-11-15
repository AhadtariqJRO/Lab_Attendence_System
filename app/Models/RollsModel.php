<?php
namespace App\Models;

use CodeIgniter\Model;
class RollsModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Title'];
}