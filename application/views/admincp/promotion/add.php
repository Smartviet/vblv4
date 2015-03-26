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
			<li><a href="<?php echo base_url().'admincp/padding/'?>">Quản trị khuyến mãi</a> <span class="divider">&gt;</span></li>
			<li class="active">Danh mục khuyến mãi</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1> <?php echo isset($detail) ? "Chỉnh sửa " : "Thêm mới"; ?></h1>
					<div class="clear"></div>
				</div>
				<form id="contact" accept-charset="utf-8" method="post"  action="<?php echo base_url('admincp/promotion/add');?>">
					<input name="edit" type="hidden" value="<?= isset($detail['id']) ? $detail['id'] : "" ; ?>">
					<div class="block-fluid">
						<div class="row-form">
							<div class="span2">Tên danh mục</div>
							<div class="span4">
								<input type="text" placeholder="" name="catName" id="catName" required value="<?= isset($detail['name']) ? $detail['name'] : "" ; ?>" />
							</div>
							<div class="span2">URL</div>
							<div class="span4">
								<input type="text" 	id="keypage" name="url" required value="<?= isset($detail['url']) ? $detail['url'] : "" ; ?>" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span2">Ảnh </div>
							<div class="span8">
								<input id="imgbaner" name="imgbaner" type="text" size="60" value="<?= isset($detail['imgbaner']) ? $detail['imgbaner'] : "" ; ?>" />
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'imgbaner' );" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span2">STT</div>
							<div class="span4">
								<input type="text" placeholder="" name="stt" id="catName" value="<?= isset($detail['stt']) ? $detail['stt'] : "" ; ?>" />
							</div>
							<div class="span2">Ẩn hiện</div>
							<div class="span4">
                                <select name="status" id="status">
                                	<option value="1" <?php if(isset($detail['status']) && $detail['status'] == 1){ echo "selected"; } ?>  >Hiện</option>
									<option value="2" <?php if(isset($detail['status']) && $detail['status'] == 2){ echo "selected"; } ?>>Ẩn</option>
                                </select>
							</div>
							<div class="clear"></div>
						</div>					
						<div class="row-form">
							<p>
									<button class="btn" type="submit" id="add">Thêm mới</button>
								</p>
								</form>
							<div class="clear"></div>
						</div>
				
				</div>
					</div>
			</div>
		</div>
	</div>
</div>