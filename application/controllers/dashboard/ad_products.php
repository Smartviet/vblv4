<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 24/03/2015
 * Time: 2:11 CH
 */
require_once 'application/controllers/dashboard/layout.php';

class Ad_Products extends Layout
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $getAllProducts = $this->product_models->getAllProduct();


        $this->_data['ad_main_content'] = $this->load->view('dashboard/ad_products/index', array(
            'getAllProducts' => $getAllProducts
        ), true);
        $this->load->view('dashboard/layout', $this->_data);
    }

    public function form()
    {
        $getAllProducts = $this->product_models->getAllProduct();


        $this->_data['ad_main_content'] = $this->load->view('dashboard/ad_products/form', array(
            'getAllProducts' => $getAllProducts
        ), true);
        $this->load->view('dashboard/layout', $this->_data);
    }
}