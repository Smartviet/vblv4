    <div class="content">
        <div class="breadLine">
            <ul class="breadcrumb">
				<li><a href="">Quản trị</a> <span class="divider">&gt;</span></li>
				<li class="active">Quản lý khuyến mãi</li>
			</ul>
            <ul class="buttons">
				<li>
					<a href="<?php echo base_url()."admincp/promotion/add"?>"><span class="icon-plus"></span><span class="text">Thêm mới</span></a>
				</li>
				<li>
					<a href="javascript: void(0)" onclick="delAllCate(); return false;"><span class="icon-remove"></span><span class="text">Xóa</span></a>
				</li>
			</ul>
        </div>
        <div class="workplace">
            <div class="row-fluid">
                <div class="span12">                    
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1>Danh sách tài khoản</h1>                               
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid table-sorting">
	                    <form accept-charset="utf-8" method="post" action="<?php echo base_url()."admincp/promotion/delete"?>" id="formListCate">
	                        	<input type="hidden" value="" name="id_list" id="id_list">
	                    </form>
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkall"/></th>
                                    <th width="10%">ID</th>
                                    <th width="20%">Tên danh mục</th>
                                    <th width="20%">Hình ảnh</th>
                                    <th width="10%">Thứ tự</th>
                                    <th width="10%">Trạng thái</th>
                                    <th width="10%">Người tạo</th>
                                    <th width="10%">Ngày tạo</th>
                                     <th width="10%">Ngày cập nhật</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $i = 1 ;?>	
                            	
                                <?php foreach($user as $idx => $val){?>
									<tr class="<?= $idx % 2 == 0? 'odd': 'event'  ?>>">
										<td>
											<div class="checker">
												<span>
													<input type="checkbox" name="checkbox[]" class="check_cat" style="opacity: 0;" value="<?= $val['id'] ?>">
												</span>
											</div>
										</td>
										<td><?=  $val['id']  ?></td>
										<td><a href="<?php echo base_url('admincp/promotion/edit');?>/<?= $val['id'] ?>"><?=  $val['name']  ?></a></td>
										<td><a href="<?php echo base_url('admincp/promotion/edit');?>/<?= $val['id'] ?>"><img src="<?= base_url($val['imgbaner']);?>" width="100px" height="100px"/></a></td>
										<td><?= $val['stt'] ?></td>
										<td><?php if ($val['status'] == '1') {echo 'hiện';} else {echo 'ẩn';} ?></td>
										<td><?= $val['c_user']; ?></td>
										<td><?= $val['created_at'] ?></td>
										<td><?=  $val['updated_at']  ?></td>
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
    
