<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class Restful extends ResourceController{
    protected $format = 'json';
    protected function responsHasil($code, $status, $data){
        return $this->respond([
            'code' => $code,
            'status' => $status,
            'data' => $data
        ]);
    }
}