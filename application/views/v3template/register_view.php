<?php
$addmail = $this->session->userdata('addMailSeccuess');  
?>
<script type="text/javascript">
$(document).ready(function(){
	var validator = $("#formRegister").validate({ 
        rules: { 
            username: {
                required: true,
                <?php if($addmail['checksection'] == false){ ?>
                	remote: {
                		url: "<?php echo base_url('home/checkUsername'); ?>",
                		type: "post",
                	},
                <?php } ?>
            }, 
            password: { 
                required: true, 
                minlength: 6, 
                
            }, 
            cpassword: { 
                equalTo: "#password" 
            }, 
            email_rg: { 
                required: true, 
                email: true,
                <?php if($addmail['checksection'] == false){ ?>
                remote: {
                	url: "<?php echo base_url('home/checkEmail'); ?>",
				 	type: "post",
				},
				<?php } ?>
            },
            fullname: {
                required: true, 
            },
        }, 
        messages: { 
            username: {
            	required :  "Hãy điền tên đăng nhập.",    
            	remote: "Username đã tồn tại trong hệ thống",
            }, 
            password: { 
                required: "Hãy điền mật khẩu", 
                minlength: "Mật khẩu ít nhất 6 ký tự"
            }, 
            cpassword: { 
                equalTo: "Mật khẩu xác nhận không chính xác" 
            }, 
            email_rg: { 
                required: "Hãy nhập 1 địa chỉ email hợp lệ", 
                email:"Địa chỉ email không hợp lệ",
                remote: "Email đã tồn tại trong hệ thống",
            }
        },
        submitHandler : function(form) {
        	var dataString = $(this.currentForm).serialize();
            alert(dataString);
            
        	$("#wait").css("display","block");
        	$.ajax({
            	url: "<?php echo base_url('register/saveAjax');?>", 
            	type: "POST",
            	dataType  : 'json',
            	data: $("#formRegister").serialize(),
            	success: function(response){
                	console.log(response);
            		$("#wait").css("display","none");
            		alert("Bạn đã đăng ký thành công ! cảm ơn");
            	   	                	
                    //window.location.href = ("<?php echo base_url($this->uri->uri_string()); ?>");
                }
           	});
        }
    }); 
});
</script>
<style>
  #wait
  {
	  background-color:rgba(0,0,0,0.7);
	  position:fixed;
	  display:none;
	  text-align:center; 
	  width:100%;
	  height:100%;
	  z-index:999;
	  top:0;
	  left:0;
	  padding:2px;
  }
</style>
<section id="main-page">
	<div id="wait">
	   <img src="<?php echo base_url('assets/libs/imgs/loading.gif'); ?>" width="150" height="150" style="margin-top:200px;opacity:1"/>
	</div>
    <article>
        <div class="register-form">
            <h4 class="title-register">Tạo tài khoản khách hàng</h4>

            <div class="register-form-inner">
            	<form action="" method="post" id="formRegister">
            	<input type="hidden" id="idupdate" name="idupdate" value="<?php echo isset($addmail["id"]["idinsert"]) ? $addmail["id"]["idinsert"]: ''; ?>">
                <table>
                	 <tr>
                        <td class="title">Username <span class="red">*</span></td>
                        <td class="info"><input name="username" id="username" type="text" value="" ></td>
                    </tr>
                    <tr>
                        <td class="title">Email <span class="red">*</span></td>
                        <td><input type="text" name="email_rg" id="email_rg" value="<?php echo isset($addmail['email']) ? $addmail['email'] : ''; ?>"></td>
                        
                    </tr>
                    <tr>
                        <td class="title">Mật khẩu <span class="red">*</span></td>
                        <td><input name="password" id="password" type="password"></td>
                    </tr>
                    <tr>
                        <td class="title">Nhập lại mật khẩu <span class="red">*</span></td>
                        <td><input  name="cpassword" id="cpassword" type="password"></td>
                    </tr>                  
                    <tr>
                        <td class="title">Họ và tên <span class="red">*</span></td>
                        <td class="info"><input  name="fullname" id="fullname" type="text" value="<?php  echo isset($addmail['username']) ? $addmail['username'] : ''; ?>" ></td>
                    </tr>                    
                    <tr>
                        <td class="title">Giới tính</td>
                        <td>
                            <select class="sex" name="sex" id="sex">
                                <option selected value="0">Lựa chọn</option>
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">Ngày sinh</td>
                        <td>
                            <select  name="day" id="day"  class="birth" >
                                <option selected value="0">Ngày</option>
                                <?php for ($d = 1; $d <= 31 ; $d++){
                                	echo "<option value='$d'> $d </option>";
                                }?>
                            </select>
                            <select  name="moth" id="moth"  class="birth" value="0">
                                <option selected>Tháng</option>
                                <?php for($m = 1; $m <= 12; $m++ ){
                                	echo "<option value='$m'> $m </option>"; 
                                }?>
                            </select>
                            <select  name="year" id="year"  class="birth" value="0">
                                <option selected>Năm sinh</option>
                                 <?php for($y = 1965; $y <= 2005; $y++ ){
                                	echo "<option value='$y'> $y </option>"; 
                                }?>
                                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Bản tin</td>
                        <td>
                            <input type="checkbox" checked class="checkmail"> Nhận các thông tin khuyến mãi qua E-mail<br>
                            <span><span class="red">*</span> Tôi đã đọc và đồng ý với chính sách của Vua bán lẻ</span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="register-button" type="submit" value="Đăng ký"></td>
                    </tr>
                </table>
                </form>
            </div>

        </div>

        <div class="policy-content">
        	 <?php if($addmail['checksection'] == true){ ?>
                 <h4 class="title"></h4>

            	<div class="gift" style="display: block">
                    <img src="<?php echo base_url('assets/img');?>/qua-tang-50.jpg" alt="Quà tặng khách hàng">
	            </div>

            <?php }else { ?>
             	
            <h4 class="title">Chính sách của Vua bán lẻ</h4>

            <div class="content">
                <p style="font-family: arial, helvetica, sans serif; font-size: 12px; line-height: 24px;">
                    <b>Cám ơn quý khách đã truy cập vào website Vuabanle.vn</b><br>
                    <br>
                    Chính sách bảo mật sẽ giải thích cách chúng tôi tiếp nhận, sử dụng và (trong trường hợp nào đó) tiết lộ thông tin cá nhân của bạn. Chính sách cũng sẽ giải thích các bước chúng tôi thực hiện để bảo mật thông tin cá nhân của khách hàng. Cuối cùng, Chính sách bảo mật sẽ giải thích quyền lựa chọn của quý khách về việc thu thập, sử dụng và tiết lộ thông tin cá nhân của mình.<br><br>
                    Bảo vệ dữ liệu cá nhân và gây dựng được niềm tin cho quý khách là vấn đề rất quan trọng với chúng tôi. Vì vậy, chúng tôi sẽ dùng tên và các thông tin khác liên quan đến quý khách tuân thủ theo nội dung của Chính sách bảo mật. Chúng tôi chỉ thu thập những thông tin cần thiết liên quan đến giao dịch mua bán.<br><br>
                    <b>1. Thu thập thông tin cá nhân</b><br><br>

                    Chúng tôi sẽ thu thập nhiều thông tin khác nhau của quý khách khi bạn muốn đặt hàng trên web.<br><br>

                    Chúng tôi thu thập, lưu trữ và xử lý thông tin của bạn cho quá trình mua hàng và cho những thông báo sau này, và để cung cấp dịch vụ. Chúng tôi không giới hạn thông tin cá nhân: danh hiệu, tên, giới tính, ngày sinh, email, địa chỉ, địa chỉ giao hàng, số điện thoại, fax, chi tiết thanh toán, chi tiết thanh toán bằng thẻ hoặc chi tiết tài khoản ngân hàng.<br><br>

                    Chúng tôi sẽ dùng thông tin quý khách đã cung cấp để xử lý đơn đặt hàng, cung cấp các dịch vụ và thông tin yêu cầu thông qua website và theo yêu cầu của bạn. Hơn nữa, chúng tôi sẽ sử dụng các thông tin đó để quản lý tài khoản của bạn; xác minh và thực hiện giao dịch trực tuyến, kiểm toán việc tải dữ liệu từ web; cải thiện bố cục và nội dung trang web và điều chỉnh cho phù hợp với người dùng; nhận diện khách vào web, nghiên cứu nhân khẩu học, gửi thông tin bao gồm thông tin sản phẩm và dịch vụ, nếu bạn không có dấu hiệu từ chối. Nếu quý khách không muốn nhận bất cứ thông tin tiếp thị của chúng tôi thì có thể từ chối bất cứ lúc nào.<br><br>

                    Chúng tôi có thể chuyển tên và địa chỉ cho bên thứ ba để họ giao hàng cho bạn (ví dụ cho bên chuyển phát nhanh hoặc nhà cung cấp).<br><br>

                    Các khoản thanh toán trực tuyến sẽ được xử lý bởi các đại lý Mạng lưới Quốc tế của chúng tôi. Quý khách chỉ đưa cho chúng tôi hoặc Đại lý hoặc website những thông tin chính xác, không gây nhầm lẫn và phải thông báo cho chúng tôi nếu có thay đổi.<br><br>

                    Chi tiết đơn đặt hàng của bạn được chúng tôi lưu giữ nhưng vì lí do bảo mật nên chúng tôi không công khai trực tiếp được. Tuy nhiên, quý khách có thể tiếp cận thông tin bằng cách đăng nhập tài khoản trên web. Tại đây, bạn sẽ thấy chi tiết đơn đặt hàng của mình, những sản phẩm đã nhận và những sản phẩm đã gửi và chi tiết email, ngân hàng và bản tin mà bạn đặt theo dõi dài hạn. Quý khách cam kết bảo mật dữ liệu cá nhân và không được phép tiết lộ cho bên thứ ba. Chúng tôi không chịu bất kỳ trách nhiệm nào cho việc dùng sai mật khẩu nếu đây không phải lỗi của chúng tôi.<br><br>

                    <b>Điều lệ khác về thông tin cá nhân</b><br><br>

                    Chúng tôi có thể dùng thông tin cá nhân của bạn để nghiên cứu thị trường. chi tiết sẽ được ẩn và chỉ được dùng để thống kê. Quý khách có thể từ chối không tham gia bất cứ lúc nào. Bất kỳ câu trả lời cho khảo sát hoặc thăm dò dư luận mà chúng tôi cần bạn làm sẽ không được chuyển cho bên thứ ba. Việc cần thiết duy nhất là tiết lộ email của bạn nếu bạn muốn tham gia. Câu trả lời sẽ được lưu tách riêng với email của bạn.<br>

                    Bạn sẽ nhận được thông tin về chúng tôi, về website, các website khác, sản phẩm, doanh số bán hàng, bản tin, bất cứ những gì liên quan đến các công ty nằm trong nhóm hoặc các đối tác kinh doanh. Nếu quý khách không muốn nhận những thông tin này, vui lòng nhấn vào link từ chối trong bất kỳ email chúng tôi gửi cho bạn. Trong vòng 7 ngày nhận chỉ dẫn của bạn, chúng tôi sẽ ngừng gửi thông tin. Nếu thấy không rõ, chúng tôi sẽ liên lạc với bạn.<br>

                    Chúng tôi sẽ tiếp tục giấu tên dữ liệu người dùng trên website và sử dụng cho nhiều mục đích khác nhau, bao gồm việc xác định vị trí của người dùng và cách sử dụng các khía cạnh nhất định của website hoặc đường link chứa trong email tới người dùng và cung cấp dữ liệu ẩn danh đó cho bên thứ 3 là nhà xuất bản. Tuy nhiên, dữ liệu này không có khả năng xác định cá nhân.<br>
                </p>
            </div>
            <?php } ?>
        </div><!--End Policy-->
    </article><!--End Register Form-->

    <div style="clear: both"></div>
</section>