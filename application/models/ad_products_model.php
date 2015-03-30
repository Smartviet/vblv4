<?php
/** 
 * Created by otcsoft.com
 * User: chinguyen.phpdev@gmail.com
 * Date: 24/03/2015
 * Time: 3:33 CH
 */
class Ad_products_model extends CI_Model
{
    public function getAllProduct()
    {
        $query = $this->db->get('tbl_product', 200);
        return $query->result();
    }
}