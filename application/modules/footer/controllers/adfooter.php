<?php
/**
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 21/03/2015
 * Time: 10:58 SA
 */


class AdFooter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }



    public function index()
    {
        $this->load->model('footer/footer_model', 'footer_model');
        $getmodel = $this->footer_model->get_login();
        $this->load->view('footer_view', array(
            'getmodel' => $getmodel
        ), true);
    }

    public function add()
    {
        echo "footer/adFooter/add";
    }
}