<?php namespace App\Controllers\Rest;

use CodeIgniter\RESTful\ResourceController;

class TestRest extends ResourceController
{
    protected $modelName = 'App\Models\M_login';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
    public function detail($id_pegawai=NULL)
    {
        $get = $this->model->getPegawai($id_pegawai);
        return $this->respond($get,200);
    }
    // ...
}