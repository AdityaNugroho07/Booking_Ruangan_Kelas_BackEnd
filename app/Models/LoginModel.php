<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'login';                 
    protected $primaryKey       = 'id';                   
    protected $useAutoIncrement = true;                   
    protected $returnType       = 'array';                
    protected $useSoftDeletes   = false;                   

    protected $allowedFields    = ['email', 'password', 'login_time', 'logout_time'];

    protected $useTimestamps = false;
}
