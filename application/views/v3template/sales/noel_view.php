<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/bigsale-ver2.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/main-slider.css">

<section id="main-page-sale">

    <article class="main-sale">
        <div class="banner-main-sale">
            <img src="<?php echo base_url('assets');?>/img/banner-main-sale.jpg" alt="Khuyến mãi hàng ngày">
        </div>

        <div class="main-sale-product">
            <div class="show-main-sale-product">
                <div id="mask"></div>
                <div id="main-slider">
                    <ul id="demo1">
                        <li><a href="#"><img src="<?php echo base_url('assets');?>/img/slider-sale/giang-sinh.jpg" alt="Tiêu đề bài viết"></a></li>
                    </ul>

                    <script>
                        $(function() {
                            var demo1 = $("#demo1").slippry({
                                //Transition: fade,horizontal,kenburns,vertical
                                transition: 'vertical',
                                useCSS: true,
                                speed: 1000,
                                pause: 5000,
                                auto: true,
                                preload: 'visible'
                            });

                            $('.stop').click(function () {
                                demo1.stopAuto();
                            });

                            $('.start').click(function () {
                                demo1.startAuto();
                            });

                            $('.prev').click(function () {
                                demo1.goToPrevSlide();
                                return false;
                            });
                            $('.next').click(function () {
                                demo1.goToNextSlide();
                                return false;
                            });
                            $('.reset').click(function () {
                                demo1.destroySlider();
                                return false;
                            });
                            $('.reload').click(function () {
                                demo1.reloadSlider();
                                return false;
                            });
                            $('.init').click(function () {
                                demo1 = $("#demo1").slippry();
                                return false;
                            });
                        });
                    </script>
                </div><!--End Main Slider-->
            </div><!-- End .show-main-sale-product-->

            <div class="logo-provider">
                <ul>
                    <li><a href="#"><img src="<?php echo base_url('assets/font-end');?>/images/provider/01.jpg"></a></li>
                    <li><a href="#"><img src="<?php echo base_url('assets/font-end');?>/images/provider/02.jpg"></a></li>
                    <li><a href="#"><img src="<?php echo base_url('assets/font-end');?>/images/provider/03.jpg"></a></li>
                    <li><a href="#"><img src="<?php echo base_url('assets/font-end');?>/images/provider/04.jpg"></a></li>
                    <li><a href="#"><img src="<?php echo base_url('assets/font-end');?>/images/provider/05.jpg"></a></li>
                    <li><a href="#"><img src="<?php echo base_url('assets/font-end');?>/images/provider/06.jpg"></a></li>
                    <li><a href="#"><img src="<?php echo base_url('assets/font-end');?>/images/provider/07.jpg"></a></li>
                    <li><a href="#"><img src="<?php echo base_url('assets/font-end');?>/images/provider/08.jpg"></a></li>
                    <!--<li><a href="#"><img src="images/provider/09.jpg"></a></li>-->
                </ul>
            </div><!--End .logo-provider-->
            
            <div style="clear:both;"></div>
        </div><!--End .main-sale-product-->

        <?php
        //var_dump($getProductPromotions);
        ?>
        <div class="list-product-sale">
        	<?php foreach ($getProductPromotions as $getProductPromotion): ?>
        	<?php if($getProductPromotion["typePromotion"] == 1){ ?>
        		<div class="product-sale-item-type-1">
	                <div class="img-thumb">
	                    <a href="<?php echo base_url($getProductPromotion['seo_name']); ?>.html"><img src="<?php echo base_url($getProductPromotion['productImage']); ?>" alt="<?php echo $getProductPromotion['productName'];?>" title="<?php echo $getProductPromotion['productName'];?>"></a>
	                </div>
	                <?php if($getProductPromotion['giamgia'] == "" || $getProductPromotion['giamgia'] == null || $getProductPromotion['giamgia'] == 0){ ?>
					<?php }else { ?>
					<div class="mask">
                        <span>-<?= round(($getProductPromotion['gia']-$getProductPromotion['giagiam']) / $getProductPromotion['gia'] * 100, 1); ?>%</span>
                    </div>
					<?php } ?>
	                <h2 class="title"><a href="<?php echo base_url($getProductPromotion['seo_name']); ?>.html"><?= $getProductPromotion['productName']?></a></h2>
	                <?php if($getProductPromotion['giamgia'] == "" || $getProductPromotion['giamgia'] == null || $getProductPromotion['giamgia'] == 0){ ?>
                        <span class="new-price"><?= Utility_model::price_format($getProductPromotion['gia']); ?>  vnđ</span>
					<?php }else { ?>
                        <span class="new-price"><?= Utility_model::price_format($getProductPromotion['giagiam']); ?> vnđ</span>
                        <br>
						<span class="old-price"><?= Utility_model::price_format($getProductPromotion['gia']); ?> vnđ</span>
                        <br>
					<?php } ?>
	                <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $getProductPromotion['productID']; ?>,<?php  if($getProductPromotion['giamgia'] == "" || $getProductPromotion['giamgia'] == null || $getProductPromotion['giamgia'] == 0){ echo $getProductPromotion['gia']; }else{ echo $getProductPromotion['giagiam']; } ?>, '<?= $getProductPromotion['productName']; ?>' )"/>
	                <?php if($getProductPromotion['ghod'] != null){ ?>
						<div class="place">Giao hàng tại <?= $getProductPromotion['ghod'] ?></div>
					<?php }else { ?>
						<div class="place">Giao hàng toàn quốc</div>
					<?php }?>
	            </div><!--End Product sale Item-->
        	<?php }elseif ($getProductPromotion["typePromotion"] == 2){ ?>
        		<div class="product-sale-item-type-2">
	                <div class="index">
	                    <span class="title">Thông số kỹ thuật</span>
	                    <ul>
	                   		<?php if($getProductPromotion["brandName"] != ""){ ?>
								<li><span>Thương hiệu: <?= @$getProductPromotion["brandName"] ?></span></li>
							<?php }  ?>
							<?php if($getProductPromotion["productCode"] != ""){ ?>
                                    <li><span>Mã sản phẩm: <?= @$getProductPromotion["productCode"]  ?></span></li>
                                <?php }  ?>
							<?php if($getProductPromotion["chatlieu"] != ""){ ?>
								<li><span>Chất liệu: <?= @$getProductPromotion["chatlieu"] ?></span></li>
							<?php }  ?>
							<?php if($getProductPromotion["kichthuoc"] != ""){ ?>
								<li><span>Kích thước: <?= @$getProductPromotion["kichthuoc"] ?></span></li>
							<?php }  ?>
							<?php if($getProductPromotion["xuatxu"] != ""){ ?>
								<li><span>Xuất xứ: <?= @$getProductPromotion["xuatxu"] ?></span></li>
							<?php }  ?>
							<?php if($getProductPromotion["baohanh"]  != ""){ ?>
								<li><span>Bảo hành: <?= @$getProductPromotion["baohanh"] ?></span></li>
							<?php }  ?>
	                    </ul>
	                </div>
	
	                <div class="img-thumb">
	                    <a href="<?php echo base_url($getProductPromotion['seo_name']); ?>.html"><img src="<?php echo base_url($getProductPromotion['productImage']); ?>" alt="<?php echo $getProductPromotion['productName'];?>" title="<?php echo $getProductPromotion['productName'];?>"></a>
	                </div>
	                <?php if($getProductPromotion['giamgia'] == "" || $getProductPromotion['giamgia'] == null || $getProductPromotion['giamgia'] == 0){ ?>
					<?php }else { ?>
					<div class="mask">
                        <span>-<?= round(($getProductPromotion['gia']-$getProductPromotion['giagiam']) / $getProductPromotion['gia'] * 100, 1); ?>%</span>
                    </div>
					<?php } ?>
	
	                <div class="info">
	                    <h2 class="title"><a href="<?php echo base_url($getProductPromotion['seo_name']); ?>.html"><?= $getProductPromotion['productName']?></a></h2>
	                    <?php if($getProductPromotion['giamgia'] == "" || $getProductPromotion['giamgia'] == null || $getProductPromotion['giamgia'] == 0){ ?>
	                        <span class="new-price"><?= Utility_model::price_format($getProductPromotion['gia']); ?>  vnđ</span>
						<?php }else { ?>
	                        <span class="new-price"><?= Utility_model::price_format($getProductPromotion['giagiam']); ?> vnđ</span>
	                        <br>
							<span class="old-price"><?= Utility_model::price_format($getProductPromotion['gia']); ?> vnđ</span>
	                        <br>
						<?php } ?>
	                    <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $getProductPromotion['productID']; ?>,<?php  if($getProductPromotion['giamgia'] == "" || $getProductPromotion['giamgia'] == null || $getProductPromotion['giamgia'] == 0){ echo $getProductPromotion['gia']; }else{ echo $getProductPromotion['giagiam']; } ?>, '<?= $getProductPromotion['productName']; ?>' )"/>
	                </div>
	                <?php if(@$getProductPromotion['ghod'] != null){ ?>
						<div class="place">Giao hàng tại <?= @$getProductPromotion['ghod'] ?></div>
					<?php }else { ?>
						<div class="place">Giao hàng toàn quốc</div>
					<?php }?>
	            </div><!--End Product sale Item-->
        	<?php }else { ?>
        		 <div class="product-sale-item-type-3">
	                <div class="img-thumb">
	                    <a href="<?php echo base_url($getProductPromotion['seo_name']); ?>.html"><img src="<?php echo base_url($getProductPromotion['productImage']); ?>" alt="<?php echo $getProductPromotion['productName'];?>" title="<?php echo $getProductPromotion['productName'];?>"></a>
	                </div>
	                <?php if($getProductPromotion['giamgia'] == "" || $getProductPromotion['giamgia'] == null || $getProductPromotion['giamgia'] == 0){ ?>
					<?php }else { ?>
					<div class="mask">
                        <span>-<?= round(($getProductPromotion['gia']-$getProductPromotion['giagiam']) / $getProductPromotion['gia'] * 100, 1); ?>%</span>
                    </div>
					<?php } ?>
	                 <div class="info">
	                    <h2 class="title"><a href="<?php echo base_url($getProductPromotion['seo_name']); ?>.html"><?= $getProductPromotion['productName']?></a></h2>
	                    <?php if($getProductPromotion['giamgia'] == "" || $getProductPromotion['giamgia'] == null || $getProductPromotion['giamgia'] == 0){ ?>
	                        <span class="new-price"><?= Utility_model::price_format($getProductPromotion['gia']); ?>  vnđ</span>
						<?php }else { ?>
	                        <span class="new-price"><?= Utility_model::price_format($getProductPromotion['giagiam']); ?> vnđ</span>
	                        <br>
							<span class="old-price"><?= Utility_model::price_format($getProductPromotion['gia']); ?> vnđ</span>
	                        <br>
						<?php } ?>
	                    <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $getProductPromotion['productID']; ?>,<?php  if($getProductPromotion['giamgia'] == "" || $getProductPromotion['giamgia'] == null || $getProductPromotion['giamgia'] == 0){ echo $getProductPromotion['gia']; }else{ echo $getProductPromotion['giagiam']; } ?>, '<?= $getProductPromotion['productName']; ?>' )"/>
	                </div>
                     <div class="icon">
                         <img src="<?php echo base_url('assets/font-end');?>/css/images/sale-on-day.png">
                     </div>
	                <?php if($getProductPromotion['ghod'] != null){ ?>
						<div class="place">Giao hàng tại <?= $getProductPromotion['ghod'] ?></div>
					<?php }else { ?>
						<div class="place">Giao hàng toàn quốc</div>
					<?php }?>
	            </div><!--End Product sale Item-->
        	<?php }?> 
            <?php endforeach; ?>
            
        </div><!--End List product sale-->
    </article><!--End Main sale-->

    <div style="clear: both"></div>
</section>