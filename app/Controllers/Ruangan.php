<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\RuanganModel;

class Ruangan extends ResourceController
{
    protected $modelName = 'App\Models\RuanganModel';
    protected $format    = 'json';

    public function index()
    {
        $data = $this->model->findAll();
        return $this->respond([
            'status' => 200,
            'message' => 'Berhasil ambil data ruangan',
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
            'nama_ruangan' => $data->nama_ruangan,
            'kapasitas'  => $data->kapasitas,
            'lokasi'      => $data->lokasi
        ]);

        return $this->respondCreated([
            'status' => 201,
            'message' => 'Data ruangan berhasil ditambahkan'
        ]);
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON();

        if (!$data) {
            return $this->fail('Invalid JSON');
        }

        $updated = $this->model->update($id, [
            'nama_ruangan' => $data->nama_ruangan,
            'kapasitas'  => $data->kapasitas,
            'lokasi'      => $data->lokasi
        ]);

        if (!$updated) {
            return $this->failNotFound("Data dengan ID $id tidak ditemukan.");
        }

        return $this->respond([
            'status' => 200,
            'message' => 'Data ruangan berhasil diupdate'
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
            'message' => 'Data ruangan berhasil dihapus'
        ]);
    }
}
