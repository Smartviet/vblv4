<?php
/** 
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 21/03/2015
 * Time: 11:18 SA
 */
class Footer_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    function get_login(){
        $query = "get model";
        return $query;
    }
}