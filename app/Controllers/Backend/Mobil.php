<?php 
namespace App\Controllers\Backend;
use App\Models\M_login;
use CodeIgniter\Controller;
use App\Controllers\BaseController;
class Mobil extends BaseController
{
    public function index()
    {
    if(session()->get('user_name')==null)
    {
        echo "KAMU BELUM MASUK"; 
    }
    else{
        echo 'You Are In'; 
        echo  session()->get('user_name');  
    }

    }
    public function coba()
    {
        
        echo 'bajingan';
    }

}


?>