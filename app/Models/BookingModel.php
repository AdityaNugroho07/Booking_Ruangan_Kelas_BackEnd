<?php namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table            = 'booking';                 
    protected $primaryKey       = 'id';                   
    protected $useAutoIncrement = true;                   
    protected $returnType       = 'array';                
    protected $useSoftDeletes   = false;                   

    protected $allowedFields    = ['tanggal', 'jam_mulai', 'jam_selesai', 'status'];

    protected $useTimestamps = false;
}
