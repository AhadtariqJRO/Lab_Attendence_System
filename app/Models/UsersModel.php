<?php namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Name', 'Designation', 'Pak_Number','Password','Status','Created_On','Updated_On','Is_Deleted','Roll_Id ',];
}

?>