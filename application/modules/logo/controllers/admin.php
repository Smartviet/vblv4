<?php
/** 
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 18/03/2015
 * Time: 1:53 CH
 */
class Admin extends MX_Controller
{
    public function index()
    {
        $this->load->view('admin');
    }

    public function hadmin()
    {
        echo "modules/logo/admin";
    }

}