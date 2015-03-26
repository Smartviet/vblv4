<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';
	class Register extends Layout
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('member_model');
		}
		
		function index()
		{
			if(isset($_POST['username_rg'] ) && $_POST['username_rg'] != ''){
				$addmail = $this->home_model->addMail( $_POST['username_rg'], $_POST['email_rg']);
				$arrSection = array(
					'checksection' => true,
					'username' => $_POST['username_rg'],
					'email' => $_POST['email_rg'],
					'id' => $addmail
				); 
				
				if($addmail){
					$this->session->set_userdata('addMailSeccuess', $arrSection);
				}
			}
		    $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Đăng ký',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );
			$getParentID0s = $this->category_model->getAllCateParent0();
			
			
			$getCateSearchs = $this->home_model->getCateSearch();
			$getAllCategoryTree = $this->home_model->getAllCategoryTree();
			$this->_data['main_content'] = $this->load->view('v3template/register_view', array(
				'getCateSearchs' => $getCateSearchs,
				'menus' => $getAllCategoryTree,
    			 'getParentID0s' => $getParentID0s,
    			 'meta' => $meta,
				 'addmail' => @$addmail,  
    		), true);
			//$this->load->view('layout_view', $this->_data);
			$this->load->view('v3template/layout_view', $this->_data);
			
		}
		
		public function saveAjax()
		{
			$code =  strtoupper(random_string());
			$data = array(
				'userName' => $_POST['username'],
				'userPass' => md5($_POST['password']),
				'fullname' => $_POST['fullname'],
				'email' => $_POST['email_rg'],
				'gender' => $_POST['sex'],
				'date' => $_POST['day'].'-'.$_POST['moth'].'-'.$_POST['year'],
				'status' => 0,
			);
			
			$datacode = array(
					'userid' => $_POST['idupdate'],
					'code' => $code,
					'status' => 0,
					'created' => date('d-m-Y h:i:s'),
			);
			

			$config = array(
					'mailtype' => 'html',
	                'protocol' => 'smtp',
	                'smtp_host' => 'ssl://smtp.googlemail.com',
	                'smtp_port' => '465',
	                'smtp_user' => 'chinguyen.phpdev@gmail.com',
	                'smtp_pass' => 'Chidung2011a@',//Nhớ đánh đúng user và pass nhé,
	                'wordwrap' => TRUE
	        );
	        $this->load->library('email',$config);
	        $this->email->set_newline("\r\n");
	        
	        $this->email->from('info@vuabanle.vn', 'Vua ban le');
	        $this->email->to($_POST['email_rg']);    
	        $this->email->subject('Email Test');
	        $datamail['title']='HELLO WORLD';
	        //$this->email->message($this->load->view('email', $data, TRUE));    
	        
			if($_POST['idupdate'] && $_POST['idupdate'] != ''){
				$update = $this->member_model->update($data, $_POST['idupdate']);
				$codeinsert = $this->member_model->savecode($datacode);
				$return['status'] = 'update';
				
				$this->session->set_userdata('logged_in', array(
					'memberID' => $_POST['idupdate'],
					'userName' => $_POST['username'],
					'email' => $_POST['email_rg'],
				));
				$datamail['code'] = $code;
				$msg = $this->load->view('v3template/email_view',$datamail,TRUE);
		    	$this->email->message($msg);
		    	
		    	if($this->email->send()){
		    		echo json_encode($return);
		    	}
		    	else
		    	{
					//show_error($this->email->print_debugger());
		    		echo json_encode($return);
		    	}
		    	
		    	
		    	
		        
		        
			}else {
				$insert =  $this->member_model->insertUserAll($data);
				
				$codeinsert =  $this->member_model->savecode($datacode);
				
				
				$return['status'] = 'insert';
				$this->session->set_userdata('logged_in', array(
						'memberID' => $_POST['idupdate'],
						'userName' => $_POST['username'],
						'email' => $_POST['email_rg'],
				));
				
				$datamail['code'] = $code;
				$msg = $this->load->view('v3template/email_view',$datamail,TRUE);
		    	$this->email->message($msg);
		        
		    	if($this->email->send()){
		    		echo json_encode($return);
		    	}
		    	else
		    	{
		    		echo json_encode($return);
		    	}
				
				
				
			}
			
			// khi dang ky thanh cong tien hanh tu sinh ma code va gui tu dong gui mail
			
			
		}
		
		
		public function saveAjax1()
		{
			if($_POST['l_username'] && $_POST['l_password'] != ''){
				$this->session->set_userdata('logged_in', array(
						'userName' => $_POST['l_username'],
						'l_password' => $_POST['l_password'],
				));
				$return['status'] = 'ok';
				echo json_encode($return);
			}
		}
		
		
		function check_register()
		{
			$this->form_validation->set_message('matches', 'Mật khẩu không trùng nhau');
			$this->form_validation->set_message('valid_email', 'Địa chỉ Email không hợp lệ');
			$this->form_validation->set_message('required', 'Mời bạn nhập %s.');
			$this->form_validation->set_rules("userName","Tên đăng nhập","required|max_length[25]|callback_checkUser");
			$this->form_validation->set_rules("password","Mật khẩu","required|matches[repassword]");
			$this->form_validation->set_rules("fullname","Họ và tên","required");
			$this->form_validation->set_rules("phone","Số điện thoại","required");
			$this->form_validation->set_rules("email","Email","required|valid_email|callback_checkEmail");
            $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Đăng ký',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );
			if($this->form_validation->run()==FALSE) {
			    $getParentID0s = $this->category_model->getAllCateParent0();
				$this->_data['main_content'] = $this->load->view('register_view', array(
    			     'getParentID0s' => $getParentID0s,
    			     'meta' => $meta   	
				), true);
				$this->load->view('v3template/layout_view', $this->_data);
			}
			else {
				$this->save();
			}
		}

		public function checkUser()
		{
			$data = array(
					"userName"  => $this->input->post("userName"),
			);
			$this->db->where("userName",$data['userName']);
			$query = $this->db->get("tbl_member");
			if ($query->num_rows() > 0)
			{
				$this->form_validation->set_message('checkUser','Tên đăng nhập đã tồn tại');
				return FALSE;
			}
			else
			{
				return TRUE;
			}
		}
        
		public function checkEmail()
		{
			$data = array(
					"email"  => $this->input->post("email"),
			);
			$this->db->where("email",$data['email']);
			$query = $this->db->get("tbl_member");
			if ($query->num_rows() > 0)
			{
				$this->form_validation->set_message('checkEmail','Email đã tồn tại');
				return FALSE;
			}
			else
			{
				return TRUE;
			}
		}
		function validate_phone_number($value) {
			$value = trim($value);
			$match = '/^\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/';
			$replace = '/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/';
			$return = '($1) $2-$3';
			if (preg_match($match, $value)) {
				return preg_replace($replace, $return, $value);
			} else {
				$this->form_validation->set_message('validate_phone_number', 'Số điện thoại không hợp lệ');
				return false;
			}
		}
		
		function save()
		{
			$data = array(
					"userName" => $this->input->post("userName"),
					"fullname"  => $this->input->post("fullname"),
					"userPass"  => md5($this->input->post("password")),
					"email"     => $this->input->post("email"),
					"phone"   => $this->input->post("phone"),
					"status"   => '2',
					"productID"   =>'0',
					
					'registry' =>   date('d-m-Y h:i:s')	
			);
			$this->member_model->insertUser($data);
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã đăng ký thành công !');
						 location.assign('".base_url('dang-nhap')."');
					  </script>";
		
		}
	}
?>