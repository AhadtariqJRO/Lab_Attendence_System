<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'designation', 'pak_number', 'password',
        'status', 'created_on', 'updated_on', 'is_deleted', 'roll_id'];
}

?>