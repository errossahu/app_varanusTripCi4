<?php 
namespace App\Controllers\Backend;
use App\Models\M_login;
use CodeIgniter\Controller;
use App\Controllers\BaseController;


class Login extends  Controller

{
	public function index()
	{
    		echo view('Login');    
	}

	public function __construct()
	{
		helper('form');
		helper('url');
		
		$this->m_login = new M_login();
	}
	


	public function login_admin()
	{
		$user_name=$this->request->getPost('user_name');
		$password=$this->request->getPost('password');
		$cek=$this->m_login->login($user_name,$password);
		if($cek==0)
		{
			session()->setflashdata('gagal','Gagal Login');
			echo "Password Salah";
		
		}else {
			session()->set('user_name', $cek['user_name']);
			$data =[
			'isi'=>'backend/v_home'
			];
			echo view('backend/layout/v_wrapper',$data);
		 
		}
		
		
	}
	public function logout()
	{	
		$this->pegawai_login->log_out();
	}

	//--------------------------------------------------------------------

}
