<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** 
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 24/03/2015
 * Time: 11:34 SA
 */
class Layout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ad_products_model', 'product_models');
    }
}