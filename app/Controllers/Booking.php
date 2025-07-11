<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BookingModel;

class Booking extends ResourceController
{
    protected $modelName = 'App\Models\BookingModel';
    protected $format    = 'json';

    public function index()
    {
        $data = $this->model->findAll();
        return $this->respond([
            'status' => 200,
            'message' => 'Berhasil ambil data booking',
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
            'tanggal' => $data->tanggal,
            'jam_mulai'  => $data->jam_mulai,
            'jam_selesai'      => $data->jam_selesai,
            'status'     => $data->status
        ]);

        return $this->respondCreated([
            'status' => 201,
            'message' => 'Data booking berhasil ditambahkan'
        ]);
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON();

        if (!$data) {
            return $this->fail('Invalid JSON');
        }

        $updated = $this->model->update($id, [
            'tanggal' => $data->tanggal,
            'jam_mulai'  => $data->jam_mulai,
            'jam_selesai'      => $data->jam_selesai,
            'status'     => $data->status
        ]);

        if (!$updated) {
            return $this->failNotFound("Data dengan ID $id tidak ditemukan.");
        }

        return $this->respond([
            'status' => 200,
            'message' => 'Data booking berhasil diupdate'
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
            'message' => 'Data booking berhasil dihapus'
        ]);
    }
}
