<?php namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    public function login($user_name , $password)
    {

        return   $this->db->table('tbl_pegawai')
        ->where(array('user_name'=>$user_name,'password'=>password_verify('password',$password)))
        ->get()->getRowArray();
  
        
        
    }
}