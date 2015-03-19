<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Bigsale extends Layout {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bigsale_model', 'bigsale_model');
    }
    
    public function index()
    {
    	$getCateSearchs = $this->home_model->getCateSearch();
    	$getAllCategoryTree = $this->home_model->getAllCategoryTree();
    	
    	$getProductPromotion = $this->bigsale_model->getPromotionProgram();
    	
    	$this->_data['main_content'] = $this->load->view('v3template/bigsale2_view', array(
    			'getCateSearchs' => $getCateSearchs,
    			'menus' => $getAllCategoryTree,
    			'getProductPromotions' => $getProductPromotion,
    	), true);
    	$this->load->view('v3template/layout_view', $this->_data);
    	
    }
    
    public function noel()
    {
    	$getCateSearchs = $this->home_model->getCateSearch();
    	$getAllCategoryTree = $this->home_model->getAllCategoryTree();
    	 
    	$getProductPromotion = $this->bigsale_model->getUti(3);
    	 
    	$this->_data['main_content'] = $this->load->view('v3template/sales/noel_view', array(
    			'getCateSearchs' => $getCateSearchs,
    			'menus' => $getAllCategoryTree,
    			'getProductPromotions' => $getProductPromotion,
    	), true);
    	$this->load->view('v3template/layout_view', $this->_data);
    	 
    }
    
    
    public function newyear()
    {
    	$getCateSearchs = $this->home_model->getCateSearch();
    	$getAllCategoryTree = $this->home_model->getAllCategoryTree();
    
    	$getProductPromotion = $this->bigsale_model->getUti(4);
    
    	$this->_data['main_content'] = $this->load->view('v3template/sales/newyear_view', array(
    			'getCateSearchs' => $getCateSearchs,
    			'menus' => $getAllCategoryTree,
    			'getProductPromotions' => $getProductPromotion,
    	), true);
    	$this->load->view('v3template/layout_view', $this->_data);
    
    }
    
}

