<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\RegistrasiModel;

class Regristrasi extends ResourceController
{
    protected $modelName = 'App\Models\RegristrasiModel';
    protected $format    = 'json';

    public function index()
    {
        $data = $this->model->findAll();
        return $this->respond([
            'status' => 200,
            'message' => 'Berhasil ambil data regristrasi',
            'data' => $data
        ]);
    }

    public function create()
    {
        $data = $this->request->getJSON();

        if (!$data) {
            return $this->fail('Invalid JSON');
        }

        $this->model->insert([
            'nama' => $data->nama,
            'email'  => $data->email,
            'password'      => $data->password
        ]);

        return $this->respondCreated([
            'status' => 201,
            'message' => 'Data regristrasi berhasil ditambahkan'
        ]);
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON();

        if (!$data) {
            return $this->fail('Invalid JSON');
        }

        $updated = $this->model->update($id, [
            'nama' => $data->nama,
            'email'  => $data->email,
            'password'      => $data->password
        ]);

        if (!$updated) {
            return $this->failNotFound("Data dengan ID $id tidak ditemukan.");
        }

        return $this->respond([
            'status' => 200,
            'message' => 'Data regristrasi berhasil diupdate'
        ]);
    }

    public function delete($id = null)
    {
        $deleted = $this->model->delete($id);

        if (!$deleted) {
            return $this->failNotFound("Data dengan ID $id tidak ditemukan.");
        }

        return $this->respondDeleted([
            'status' => 200,
            'message' => 'Data regristrasi berhasil dihapus'
        ]);
    }
}
