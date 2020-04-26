<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $model = strtolower(get_class($this));
        if(file_exists(APPATH . 'models/' . $model . '_model.php')){
            $this->load->model($model . '_model.php', $model, true);
        }
    }
    

    /***
     * load view with default layout
     */

     public function view($data){
         $this->load->view('layouts/app', $data);
     }
     
}

/* End of file MY_Controller.php */
