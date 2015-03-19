<?php
require_once(APPPATH.'\modules\backend\controllers\ad_layout.php');
/**
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 18/03/2015
 * Time: 1:52 CH
 */
class Products extends Ad_layout
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_data['main_content'] = $this->load->view('products/index', '', true);
        $this->load->view('layout', $this->_data);
    }

    public function add()
    {
        $this->_data['main_content'] = $this->load->view('products/form', '', true);
        $this->load->view('layout', $this->_data);
    }
}