<?php
/**
 * @author chinguyen.phpdev@gmail.com
 * @copyright  Otcsoft.com 11-2014 . All rights reserved.
 */
class Bigsale_model extends CI_model 
{
	public function getPromotionProgram()
	{
		$sql = "
				SELECT
					p.productID,
					p.*, br.catName AS brandName
				FROM
					`tbl_product` AS p
				LEFT JOIN tbl_brand AS br ON p.thuonghieuID = br.catID
				WHERE
					`allPromotion` LIKE '%1,%'
				ORDER BY
					p.stt ASC;
				";
		$query = $this->db->query($sql);
		if($query->num_rows > 0) {
			return $query->result_array();
		}else {
			return false;	
		}		
	}	
	
	public function getUti($id)
	{
		$sql = "
				SELECT
					p.productID,
					p.*, br.catName AS brandName
				FROM
					`tbl_product` AS p
				LEFT JOIN tbl_brand AS br ON p.thuonghieuID = br.catID
				WHERE
					`allPromotion` LIKE '%{$id},%'
				ORDER BY
					p.stt ASC;
				";
		$query = $this->db->query($sql);
		if($query->num_rows > 0) {
			return $query->result_array();
		}else {
			return false;
		}
	}
}
