<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';                 
    protected $primaryKey       = 'id';                   
    protected $useAutoIncrement = true;                   
    protected $returnType       = 'array';                
    protected $useSoftDeletes   = false;                   

    protected $allowedFields    = ['nama', 'email', 'password', 'role'];

    protected $useTimestamps = false;
}
