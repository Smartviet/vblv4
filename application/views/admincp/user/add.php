<script type="text/javascript">
$(document).ready(function(){
    $("#contact").validate({
        errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
    });
}); 
</script>
<div class="content">
 <div class="breadLine">
	 <ul class="breadcrumb">
	                <li><a href="<?php echo base_url().'admincp/user/'?>">Quản lý user</a> <span class="divider">></span></li>                
	                <li class="active">Thêm tài khoản</li>
	 </ul>
 </div>
  <div class="workplace">
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head">
                        <div class="isw-documents"></div>
                        <h1>Thêm tài khoản</h1>
                        <div class="clear"></div>
                    </div>
                    
               <form accept-charset="utf-8" method="post" action="<?php echo base_url()."admincp/user/add";?>" id="">     
                    <div class="block-fluid">    
                        
					
                            <div class="span3"></div>
                            <div class="span4">
                            <p>
						<?php echo validation_errors(); ?> 
						</p>
                            </div>
                            <div class="clear"></div>
                    
                        <div class="row-form">
                       
                            <div class="span3">Tài khoản :</div>
                            <div class="span4">
                            <input type="text" name ="user_name" value="<?php echo set_value('user_name'); ?>" /></div>
                            <div class="clear"></div>
                        </div> 

                        <div class="row-form">
                            <div class="span3">Mật khẩu :</div>
                            <div class="span4">
                            <input type="password" name="password"  placeholder="Mời bạn nhập mật khẩu" /></div>
                            <div class="clear"></div>
                        </div>                         

                        <div class="row-form">
                            <div class="span3">Số điện thoại :</div>
                            <div class="span4">
                            <input type="text" name="phone" placeholder="Mời bạn nhập số điện thoại" /></div>
                            <div class="clear"></div>
                        </div> 

                        <div class="row-form">
                            <div class="span3">Email :</div>
                            <div class="span4">
                            <input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Mời bạn nhập Email"/></div>
                          	<div class="clear"></div>
                        </div>                                       
                        
                        <div class="row-form">
                            <div class="span3">Địa chỉ :</div>
                            <div class="span4">
                            <input type="text" placeholder="Mời bạn nhập địa chỉ" name="address"  /></div>
                            <div class="clear"></div>
                        </div>  
                          <div class="row-form">
                            <div class="span3">Công việc :</div>
                            <div class="span4">
                            <input type="text" placeholder="Mời bạn nhập công việc" name="userJob"  /></div>
                            <div class="clear"></div>
                        </div>                                                             
						<div class="row-form">
							<div class="span4">
								<p>
									<button class="btn" type="submit" id="add">Thêm mới</button>
								</p>
							</div>
							<div class="clear"></div>
						</div>
                                                                   
                        
                    </div>
                </form>
                </div>
                
            </div>
</div>
</div>