<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Promotion extends Ad_layout
{	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('pagination');
	}
	
	var $table = "tbl_promotion";
	
	public function index()
	{	
		$config['per_page']= 20;
		
		$config['base_url']=base_url('/admincp/promotion');
		$config['total_rows']=$this->base_model->count_all($this->table);
		
		$config['uri_segment']=3;
		$offset=$this->uri->segment(3);
		$number=$config['per_page'];
		$this->pagination->initialize($config);
		$data['result']=$this->base_model->get_table($this->table, $number, $offset);
			
		$this->_data['ad_main_content'] = $this->load->view('admincp/promotion/index', array(
				'user' => $data['result'],
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function add()
	{
		$this->form_validation->set_rules('type', 'type', '');
		if ($this->form_validation->run() == FALSE)
		{
			$this->_data['ad_main_content'] = $this->load->view('admincp/promotion/add', array(
			), true);
			$this->load->view('admincp/ad_layout_view', $this->_data);
		}
		else
		{
			$this->save();
		}
	}

	
	function save()
	{
		$section = $this->session->userdata('logged_ad');
		$data = array(
				"name"  => $this->input->post("catName"),
				"url"  => $this->input->post("url"),
				"imgbaner"     => $this->input->post("imgbaner"),
				'stt' =>  $this->input->post('stt'),
				"created_at" => date('Y-m-d H:i:s'),
				"status"     => $this->input->post("status"),
				"c_user"     => $section['userName'],
		);
		if($_POST['edit'] != '' && $_POST['edit'] != 0){
			$word = "Cập nhật";
			$this->base_model->update($this->table, $data, "id", $_POST['edit']);
		}else {
			$word = "thêm mới";
			$this->base_model->insert($this->table, $data);
		}
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
			<script>
			alert('Bạn đã ".$word." thành công !');
			 location.assign('".base_url('admincp/promotion')."');
		  </script>";
	}
	public function edit()
	{
	
		$id = $this->uri->segment(4);
		$data = $this->base_model->get_detail($this->table, 'id', $id);
		$this->form_validation->set_rules('type', 'type', '');
		if ($this->form_validation->run() == FALSE){
			$this->_data['ad_main_content'] = $this->load->view('admincp/promotion/add', array(
					'detail' => $data,
			), true);
			$this->load->view('admincp/ad_layout_view', $this->_data);
		}else {
			$this->update();
		}
	}

	
	
	public function delete()
	{		
		$baseurl = base_url();
		$id_list_str = $this->input->post('id_list');
		$id_dels = explode(",",$id_list_str);
		foreach($id_dels as $id){
			$result = $this->base_model->delete($this->table, 'id' , $id);
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
			<script>
			alert('Bạn đã xóa thành công');
			window.open('{$baseurl}admincp/promotion','_self');
			</script>";
		}else {
			log_message('error', 'Some variable did not contain a value.');
			}
		}
	
}