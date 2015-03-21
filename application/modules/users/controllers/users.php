<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

    public function index()
    {

        $this->load->model('users/demo_model', 'demo');
        var_dump($this->demo->getall());
        $bien = "dkm";
        $this->load->view('users_view', array(
            'bien' => $bien
        ));
    }
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */