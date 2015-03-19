<?php
/**
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 18/03/2015
 * Time: 2:47 CH
 */
class Ad_layout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->_data['ad_header'] = $this->load->view('includes/ad_header', '', true);
        $this->_data['ad_menu'] = $this->load->view('includes/ad_menu', '', true);
        $this->_data['ad_footer'] = $this->load->view('includes/ad_footer', '', true);

    }
}