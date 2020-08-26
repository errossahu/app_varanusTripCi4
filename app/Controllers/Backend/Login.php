<?php 
namespace App\Controllers\Backend;
use App\Models\M_login;
use CodeIgniter\Controller;
use App\Controllers\BaseController;


class Login extends  Controller

{
	

	public function __construct()
	{
		helper('form');
		$this->m_login = new M_login();
	}
		public function index()
	{
    	echo view('Login');    
	}


	public function login_admin()
	{
		$user_name=$this->request->getPost('user_name');
		$password=$this->request->getPost('password');
		$cek=$this->m_login->login($user_name, $password);
		$nama=$cek['user_name'];
		$passwordC=$cek['user_name'];
		$nama_pegawai=$cek['namaPegawai'];
		if($nama==$user_name && $password==$password)
		{
			session()->set('user_name',$nama);
			session()->set('namaPegawai',$nama_pegawai);
			$print = 'Kamu Berhasil Login';
			echo session()->get('user_name');
			echo($print);
		}
		else
		{
			echo 'fuck';
		}
		
	}
	public function logout()
	{
		$this->pegawai_login->log_out();
	}

	//--------------------------------------------------------------------

}
