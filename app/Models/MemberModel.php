<?php namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table            = 'member';                 
    protected $primaryKey       = 'id';                   
    protected $useAutoIncrement = true;                   
    protected $returnType       = 'array';                
    protected $useSoftDeletes   = false;                   

    protected $allowedFields    = ['nama', 'email', 'password'];

    protected $useTimestamps = false;
}
