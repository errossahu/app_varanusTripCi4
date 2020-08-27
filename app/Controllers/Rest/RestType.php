<?php namespace App\Controllers\Rest;

use CodeIgniter\RESTful\ResourceController;

class RestType extends ResourceController
{
    protected $modelName = 'App\Models\M_type';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
    public function detail($id_tpye=NULL)
    {
        $get = $this->model->getType($id_tpye);
        return $this->respond($get,200);
    }
    // ...
}