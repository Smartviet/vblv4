<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/dashboard/layout.php';
/** 
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 24/03/2015
 * Time: 11:33 SA
 */
class dashboard extends Layout
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_data['ad_main_content'] = $this->load->view('dashboard/dashboard/index', '', true);
        $this->load->view('dashboard/layout', $this->_data);
    }
}