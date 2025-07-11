<?php namespace App\Models;

use CodeIgniter\Model;

class RuanganModel extends Model
{
    protected $table            = 'ruangan';                 
    protected $primaryKey       = 'id';                   
    protected $useAutoIncrement = true;                   
    protected $returnType       = 'array';                
    protected $useSoftDeletes   = false;                   

    protected $allowedFields    = ['nama_ruangan', 'kapasitas', 'lokasi'];

    protected $useTimestamps = false;
}
