<style type="text/css">
<!--
.aview {
	color: red;
	font-weight: bold;
}
-->
</style>    
    <div class="content">
        <div class="breadLine">
            <ul class="breadcrumb">
				<li><a href="">Quản trị</a> <span class="divider">&gt;</span></li>
				<li class="active">Quản lý tài khoản</li>
			</ul>
            <ul class="buttons">
				<li>
					<a href="<?php echo base_url()."admincp/user/add"?>"><span class="icon-plus"></span><span class="text">Thêm mới</span></a>
				</li>
				<li>
					<a href="javascript: void(0)" onclick="delAllCate(); return false;"><span class="icon-remove"></span><span class="text">Xóa</span></a>
				</li>
		
			
			
			</ul>
        </div>
        <div class="workplace">
         <div class="row-fluid">
                
                <div class="span12">
        		<form accept-charset="utf-8" method="post" action="<?= base_url('admincp/user') ?>" id="formserchproduc">
					<div class="popup"  style="display:block;">
						<div class="head">
							<div class="arrow"></div>
								<span class="isw-zoom"></span>
								<span class="name">Tìm kiếm</span>
                                <input type="hidden" id="page_product" name="page" value="" />
								<input type="text" name="keysearch" placeholder="nhập từ cần tìm..." value="">
                                	<button type="submit" class="btn">Tìm Kiếm</button>
								<div class="clear"></div>
							</div>
							
					</div>
					</form>
                    </div>
                    </div>
            <div class="row-fluid">
                
                <div class="span12">                    
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1>Danh sách tài khoản</h1>                               
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
	                    <form accept-charset="utf-8" method="post" action="<?php echo base_url()."admincp/user/delete"?>" id="formListCate">
	                        	<input type="hidden" value="" name="id_list" id="id_list">
	                    </form>
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall"/></th>
                                    <th width="5%">ID</th>
                                    <th width="25%">Tên tài khoản</th>
                                    <th width="25%">Email</th>
                                    <th width="20%">Công việc</th>
                                     <th width="20%">Số điện thoại</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1 ;?>	
                            	
                                <?php foreach($user as $idx => $val){?>
									<tr class="<?= $idx % 2 == 0? 'odd': 'event'  ?>>">
										<td>
											<div class="checker">
												<span>
													<input type="checkbox" name="checkbox[]" class="check_cat" style="opacity: 0;" value="<?= $val['userID'] ?>">
												</span>
											</div>
										</td>
										<td><?=  $val['userID']  ?></td>
										<td><a href="<?php echo base_url('admincp/user/edit');?>/<?= $val['userID'] ?>"><?= $val['userName'] ?></a></td>
										<td><?= $val['userEmail'] ?></td>
										<td><?= $val['userJob'] ?></td>
										<td><?= $val['userMobile'] ?></td>
										
										<?php $i++ ?>
									</tr>
								<?php } ?>
                                   	           
                            </tbody>
                            
                        </table>
                  		 <?php echo $this->pagination->create_links();?>  
                        <div class="clear"></div>
                    </div>
                </div>                                
               
            </div>   
        
    </div>   
    
