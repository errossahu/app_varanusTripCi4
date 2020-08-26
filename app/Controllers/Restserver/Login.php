<?php
namespace App\Controllers\Restserver;
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;

class Login extends ResourceController
{
    protected $format = 'json ';
    protected $getall=   App\Models\Login;
    
    public function index()
    {

        return $this->respond($this->model->findall());
    }
}


?>