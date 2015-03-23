 <?php
class Email extends CI_Controller{
    function __construct(){
        parent::Controller();
    }
    
    function index(){
         $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => '465',
                'smtp_user' => 'chinguyen.phpdev@gmail.com',
                'smtp_pass' => 'Chidung2011a@'//Nhớ đánh đúng user và pass nhé
        );
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        
        $this->email->from('chinguyen.phpdev@gmail.com', 'chi Nguyen');
        $this->email->to('chinguyen.phpdev@gmail.com');    
        $this->email->subject('Email Test');
        $this->email->message('Kiểm tra thư này đi có virus ak!!!');    
        
        //Các dòng được thêm nè
        $path = $this->config->item('server_root');//Test đường dẫn thì echo nó ra,rùi   dùng die(); nếu hiện ra đường dẫn thì ok xóa bỏ nó
        $file = $path . '/ciexam/attachments/yourinfo.txt';
        $this->email->attach($file);
        
        if($this->email->send()){
        	echo "Mail đã được gửi cho bạn";
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }
}
?> 