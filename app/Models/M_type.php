<?php namespace App\Models;

use CodeIgniter\Model;

class M_type extends Model
{
    protected $table= 'tbl_type';

    public function getType($id_type)
    {
        if($id_type==NULL)
        {
            return $this->findAll();
        }
        else{
            return $this->getwhere(array('id_type'=>$id_type))
            ->getRowArray();
       
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