<?php namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    protected $table= 'tbl_pegawai';
  


    public function getPegawai($id_pegawai)
    {
        if($id_pegawai==NULL)
        {
            echo "Kok Disini";
        }
        else{
            return $this->getwhere(array('id_pegawai'=>$id_pegawai))
            ->getRowArray();
       
        }
    }
    public function getLogin($user_name,$password)
    {

        if($user_name==null && $password==null)
        {
            return $this->findAll();
        }
        else
        {
            return $this->getwhere(array('user_name'=>$user_name,'password'=>password_verify('password',$password)))
           -> getRowArray();
        }

  

    }
    public function login($user_name , $password)
    {
        $db= \Config\Database::connect();
        $data =$db->table('tbl_pegawai')
            ->where(array('user_name'=>$user_name))
            ->get()->getRowArray();
            if($data!=null)
            {
                if(password_verify($password,$data['password']))
                {
                    return $data ;
                }
                else{
                    return 0 ;
                }
            }
            else{
                return 0 ;
            }
       
            
        

        
        
    }
    
    // public function getType($id_type=false)
    // {
    //     if(id_type==null)
    //     {
    //         return $this->findAll();
    //     }
    //     else{
    //         return $this->getWhere(array('id_type'=$id_type))
    //         -> getRowArray();        
    //     }


    // }

}