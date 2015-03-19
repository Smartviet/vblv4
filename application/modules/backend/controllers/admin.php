<?php
/**
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 19/03/2015
 * Time: 9:41 SA
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "Day la backend";
    }
    public function add()
    {
        echo "add backend/admin/add";
    }

    public function admin()
    {
        echo "admin";
    }

}