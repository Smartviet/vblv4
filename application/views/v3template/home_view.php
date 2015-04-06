<!-- Quan ly popup -->
<?php if($getPopup) { ?> 
<div class="cookie-popup-wrap" style="display: none">
		<div class="cookie-popup">
            <a href="<?php echo $getPopup->url; ?>">
                <img class="lazy" data-original="<?= base_url($getPopup->image); ?>" src="<?= base_url('assets/2015/js/loading.gif');?>" alt="Khuyến mại" title="Khuyến mại">
            </a>
			<h6 id="closepopup"><a href="#"></a></h6>
		</div>
        <div class="mask"></div>
</div>
<?php } ?>
<!--End .cookie-popup-wrap-->

<!-- main_content -->
<div id="main_content">
<section id="slider">
    <div id="slider-inner">
        <div id="main-slider">
            <ul id="demo1">            	
        		<?php foreach (json_decode($gallerys->galleryImage) as $gallery) {
                    echo "<li><a href=$gallery->imagelink ><img src=$gallery->image_url alt='Tiêu đề bài viết'></a></li>";
                } ?>
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

        <div id="right-advertise-slider">
        	<?php foreach($paddings as $padding): if($padding['type'] == 1){ ?>
            <div class="advertise-item">
                <a href="<?php echo $padding['url']; ?>">
                <img src="<?= base_url($padding['image']); ?>" alt="Quảng cáo">
                </a>
            </div><!--End Advertise Item-->
			<?php } endforeach;?>
        </div><!--End Right Advertise Slider-->

        <div style="clear: both"></div>
    </div><!--End Slider Inner-->
</section><!--End Slider-->

<section id="hot-product">
    <div id="hot-product-inner">
        <script type="text/javascript">
            $(document).ready(function() {

                $(".tab_content").hide();
                $(".tab_content:first").show();

                $("ul.tabs li").click(function() {
                    $("ul.tabs li").removeClass("active");
                    $(this).addClass("active");
                    $(".tab_content").hide();
                    var activeTab = $(this).attr("rel");
                    $("#"+activeTab).fadeIn();
                });
            });
        </script>

        <ul class="tabs">
            <li class="active" rel="tab1">Khuyến mãi</li>
            <li rel="tab2" class="">Mới nhất</li>
            <li rel="tab3" class="">Xem nhiều nhất</li>
        </ul>

        <div class="tab_container">

            <div id="tab1" class="tab_content" style="display: block;">

                <?php $i = 1; foreach($gettoptPromotions as $gettoptPromotion): $i++ ?>
                    <div class="product-item <?php if($i > 5){ echo "last"; } ?>" >

                        <div class="img-product-item">
                            <a href="<?php echo base_url($gettoptPromotion['seo_name']); ?>.html"><img class="lazy" data-original="<?php echo base_url($gettoptPromotion['productImage']); ?>" src="<?php echo base_url($gettoptPromotion['productImage']); ?>" alt="<?php echo $gettoptPromotion['productName'];?>" title="<?php echo $gettoptPromotion['productName'];?>"></a>
                        </div>

                        <h2 class="product-name"><a href="#"><?= $gettoptPromotion['productName'] ?></a></h2>

                        <div class="product-price">
                            <?php if($gettoptPromotion['giamgia'] == "" || $gettoptPromotion['giamgia'] == null || $gettoptPromotion['giamgia'] == 0){ ?>
                                <div class="new-price"><?= Utility_model::price_format($gettoptPromotion['gia']); ?>  vnđ</div>
                            <?php }else { ?>
                                <span class="new-price"><?= Utility_model::price_format($gettoptPromotion['giagiam']); ?> vnđ</span>
                                <br>
                                <span class="old-price"><?= Utility_model::price_format($gettoptPromotion['gia']); ?> vnđ</span>
                                <br>
                            <?php } ?>

                            <div class="status-product">
                                <?php if($gettoptPromotion['tinhtranghang'] == 1 ){ ?>
                                    <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus1.gif"); ?>">
                                <?php } ?>

                                <?php if($gettoptPromotion['tinhtranghang'] == 2 ){ ?>
                                    <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus2.gif"); ?>">
                                <?php } ?>

                                <?php if($gettoptPromotion['tinhtranghang'] == 3 ){ ?>
                                    <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus3.gif"); ?>">
                                <?php } ?>
                            </div>
                            <div class="small-info">
                            <span class="count-view" title="Lượt xem sản phẩm"
                                  style="cursor: help"><?php if ($gettoptPromotion['view'] != "") {
                                    echo @$gettoptPromotion['view'];
                                } ?></span><br>
                            <span class="local-ship" title="Địa điểm giao hàng"
                                  style="cursor: help"><?php if ($gettoptPromotion['ghod'] != null) { ?>
                                    <?= $gettoptPromotion['ghod'] ?>
                                <?php } else { ?>
                                    Toàn Quốc
                                <?php } ?></span>
                            </div>
                        </div>

                        <div class="button-buy">
                            <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $gettoptPromotion['productID']; ?>,<?php  if($gettoptPromotion['giamgia'] == "" || $gettoptPromotion['giamgia'] == null || $gettoptPromotion['giamgia'] == 0){ echo $gettoptPromotion['gia']; }else{ echo $gettoptPromotion['giagiam']; } ?>, '<?= $gettoptPromotion['productName']; ?>' )"/>
                        </div>
                        <?php if($gettoptPromotion['giamgia'] == "" || $gettoptPromotion['giamgia'] == null || $gettoptPromotion['giamgia'] == 0){ ?>
                        <?php }else { ?>
                            <div class="product-mask">
                                <span>-<?= round(($gettoptPromotion['gia']-$gettoptPromotion['giagiam']) / $gettoptPromotion['gia'] * 100, 1); ?>%</span>
                            </div>
                        <?php } ?>
                    </div>
                <?php endforeach ?>
                <!--End Product Item-->


                <div style="clear: both"></div>
            </div><!-- #tab1 -->

            <div id="tab2" class="tab_content" style="display: none;">
                <?php $i = 1; foreach($gettopnews as $gettopnew): $i++ ?>
                    <div class="product-item <?php if($i > 5){ echo "last"; } ?>" >

                        <div class="img-product-item">
                            <a href="<?php echo base_url($gettopnew['seo_name']); ?>.html"><img class="lazy" data-original="<?php echo base_url($gettopnew['productImage']); ?>" src="<?php echo base_url($gettopnew['productImage']); ?>"  alt="<?php echo $gettopnew['productName'];?>" title="<?php echo $gettopnew['productName'];?>"></a>
                        </div>

                        <h2 class="product-name"><a href="#"><?= $gettopnew['productName'] ?></a></h2>

                        <div class="product-price">
                            <?php if($gettopnew['giamgia'] == "" || $gettopnew['giamgia'] == null || $gettopnew['giamgia'] == 0){ ?>
                                <div class="new-price"><?= Utility_model::price_format($gettopnew['gia']); ?>  vnđ</div>
                            <?php }else { ?>
                                <span class="new-price"><?= Utility_model::price_format($gettopnew['giagiam']); ?> vnđ</span>
                                <br>
                                <span class="old-price"><?= Utility_model::price_format($gettopnew['gia']); ?> vnđ</span>
                                <br>
                            <?php } ?>

                            <div class="status-product">
                                <?php if($gettopnew['tinhtranghang'] == 1 ){ ?>
                                    <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus1.gif"); ?>">
                                <?php } ?>

                                <?php if($gettopnew['tinhtranghang'] == 2 ){ ?>
                                    <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus2.gif"); ?>">
                                <?php } ?>

                                <?php if($gettopnew['tinhtranghang'] == 3 ){ ?>
                                    <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus3.gif"); ?>">
                                <?php } ?>
                            </div>
                            <div class="small-info">
                            <span class="count-view" title="Lượt xem sản phẩm"
                                  style="cursor: help"><?php if ($gettopnew['view'] != "") {
                                    echo @$gettopnew['view'];
                                } ?></span><br>
                            <span class="local-ship" title="Địa điểm giao hàng"
                                  style="cursor: help"><?php if ($gettopnew['ghod'] != null) { ?>
                                    <?= $gettopnew['ghod'] ?>
                                <?php } else { ?>
                                    Toàn Quốc
                                <?php } ?></span>
                            </div>
                        </div>

                        <div class="button-buy">
                            <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $gettopnew['productID']; ?>,<?php  if($gettopnew['giamgia'] == "" || $gettopnew['giamgia'] == null || $gettopnew['giamgia'] == 0){ echo $gettopnew['gia']; }else{ echo $gettopnew['giagiam']; } ?>, '<?= $gettopnew['productName']; ?>' )"/>
                        </div>
                        <?php if($gettopnew['giamgia'] == "" || $gettopnew['giamgia'] == null || $gettopnew['giamgia'] == 0){ ?>
                        <?php }else { ?>
                            <div class="product-mask">
                                <span>-<?= round(($gettopnew['gia']-$gettopnew['giagiam']) / $gettopnew['gia'] * 100, 1); ?>%</span>
                            </div>
                        <?php } ?>
                    </div>
                <?php endforeach ?>
                <!--End Product Item-->


                <div style="clear: both"></div>
            </div><!-- #tab2 -->

            <div id="tab3" class="tab_content" style="display: none;">
                <?php $i = 1; foreach($gettopViews as $gettopView): $i++ ?>
                <div class="product-item <?php if($i > 5){ echo "last"; } ?>" >

                    <div class="img-product-item">
                        <a href="<?php echo base_url($gettopView['seo_name']); ?>.html"><img class="lazy" data-original="<?php echo base_url($gettopView['productImage']); ?>" src="<?php echo base_url($gettopView['productImage']); ?>" alt="<?php echo $gettopView['productName'];?>" title="<?php echo $gettopView['productName'];?>"></a>
                    </div>

                    <h2 class="product-name"><a href="#"><?= $gettopView['productName'] ?></a></h2>

                    <div class="product-price">
                        <?php if($gettopView['giamgia'] == "" || $gettopView['giamgia'] == null || $gettopView['giamgia'] == 0){ ?>
                            <div class="new-price"><?= Utility_model::price_format($gettopView['gia']); ?>  vnđ</div>
                        <?php }else { ?>
                            <span class="new-price"><?= Utility_model::price_format($gettopView['giagiam']); ?> vnđ</span>
                            <br>
                            <span class="old-price"><?= Utility_model::price_format($gettopView['gia']); ?> vnđ</span>
                            <br>
                        <?php } ?>

                        <div class="status-product">
                            <?php if($gettopView['tinhtranghang'] == 1 ){ ?>
                                <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus1.gif"); ?>">
                            <?php } ?>

                            <?php if($gettopView['tinhtranghang'] == 2 ){ ?>
                                <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus2.gif"); ?>">
                            <?php } ?>

                            <?php if($gettopView['tinhtranghang'] == 3 ){ ?>
                                <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus3.gif"); ?>">
                            <?php } ?>
                        </div>
                        <div class="small-info">
                            <span class="count-view" title="Lượt xem sản phẩm"
                                  style="cursor: help"><?php if ($gettopView['view'] != "") {
                                    echo @$gettopView['view'];
                                } ?></span><br>
                            <span class="local-ship" title="Địa điểm giao hàng"
                                  style="cursor: help"><?php if ($gettopView['ghod'] != null) { ?>
                                    <?= $gettopView['ghod'] ?>
                                <?php } else { ?>
                                    Toàn Quốc
                                <?php } ?></span>
                        </div>
                    </div>

                    <div class="button-buy">
                        <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $gettopView['productID']; ?>,<?php  if($gettopView['giamgia'] == "" || $gettopView['giamgia'] == null || $gettopView['giamgia'] == 0){ echo $gettopView['gia']; }else{ echo $gettopView['giagiam']; } ?>, '<?= $gettopView['productName']; ?>' )"/>
                    </div>
                    <?php if($gettopView['giamgia'] == "" || $gettopView['giamgia'] == null || $gettopView['giamgia'] == 0){ ?>
                    <?php }else { ?>
                        <div class="product-mask">
                            <span>-<?= round(($gettopView['gia']-$gettopView['giagiam']) / $gettopView['gia'] * 100, 1); ?>%</span>
                        </div>
                    <?php } ?>
                </div>
                <?php endforeach ?>
                <!--End Product Item-->

                <div style="clear: both"></div>
            </div><!-- #tab3 -->

        </div> <!-- .tab_container -->

        <div style="clear: both"></div>
    </div><!--End Hot Product Inner-->
</section><!--End Hot Product-->


<?php $cate = 1; foreach($getAllatHomes as $getAllatHome): 
$json_decode_getAllatHomes = json_decode($getAllatHome['imgurl']);
$json_decode_imgurlbrands = json_decode($getAllatHome['imgurlbrand']);
$json_decode_namelinks = json_decode($getAllatHome['namelink']);
$json_decode_adslinks = json_decode($getAllatHome['adslink']);
$json_decode_titlenameimglinks = json_decode($getAllatHome['titlenameimglink']);
?>
<section class="category" id="category-<?= $cate ?>">
    <div class="taskbar">
        <div class="icon">
            <div class="icon-inner">
                <a href="#"><img src="<?php echo $json_decode_getAllatHomes['1']->imgurl1; ?>" alt="Tên chuyên mục" title="Tên chuyên mục"></a>
            </div>
        </div>

        <div class="floors">
            <span>f1</span>
        </div>


        <div class="category-name">
            <h2><a href="#"><?php echo $getAllatHome['name']; ?></a></h2>
        </div>


        <div class="taskbar-menu">
            <a class="view-more" href="#">Xem thêm</a>
            <ul>
                <?php  foreach($getAllatHome['connectmenu'] as $connectmenu01 ): ?>
                <li><a href="<?= $connectmenu01['keypage'] ?>"><?= $connectmenu01['catName'] ?></a>
                    <ul>
                        <?php foreach($connectmenu01['CatChild'] as $connectmenu02 ): ?>
                        <li><a href="<?= $connectmenu02['keypage'] ?>"><?= $connectmenu02['catName'] ?></a></li>
                        <?php endforeach  ?>
                    </ul>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div><!--End Taskbar-->

    <div class="left-function">
        <div class="menu">
            <ul>
                <?php foreach ($json_decode_namelinks as $key => $json_decode_namelink): ?>
                <li><a href="<?php echo $json_decode_namelink->namelink1; ?>"><?php echo $json_decode_namelink->namelink; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="main-images">
            <a href="<?php echo $json_decode_adslinks[0]->adslink; ?>"><img class="lazy" data-original="<?php echo $json_decode_adslinks[1]->adslink1;?>" src="<?php echo base_url('assets/2015/js/loading.gif');?>" alt="Tên ảnh" title="Tên ảnh"></a>
        </div>

        <div class="logo-provider">
            <?php foreach ($json_decode_imgurlbrands as $key => $json_decode_imgurlbrand): ?>
            <div class="item"><a href="<?php echo $json_decode_imgurlbrand->imgurlbrand; ?>"><img  class="lazy" data-original="<?php echo base_url($json_decode_imgurlbrand->imgurlbrand1);?>" src="<?php echo base_url('assets/2015/js/loading.gif');?>"  alt="Tên nhà cung cấp" title="Tên nhà cung cấp"></a></div>
            <?php endforeach; ?>
        </div>

        <div style="clear: both"></div>
    </div><!--End Left Function-->

    <div class="right-function">
        <div class="small-product">
            <?php foreach ($json_decode_titlenameimglinks as $key => $json_decode_titlenameimglink): ?>
            <div class="item">
                <h3 class="top-product-name">
                    <a href="<?php echo $json_decode_titlenameimglink->titlenameimglink2 ;?>"><?php echo $json_decode_titlenameimglink->titlenameimglink ;?></a>
                </h3>
                <span class="top-product-description"><?php echo $json_decode_titlenameimglink->titlenameimglink1 ;?></span>
                <div class="top-product-image">
                    <a href="<?php echo $json_decode_titlenameimglink->titlenameimglink2 ;?>">
                        <img class="lazy" data-original="<?php echo base_url($json_decode_titlenameimglink->titlenameimglink3);?>" src="<?php echo base_url('assets/2015/js/loading.gif');?>" alt="<?php echo $json_decode_titlenameimglink->titlenameimglink2 ;?>">
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

            <div style="clear: both"></div>
        </div>

        <div class="filter">
            <div class="title"><span>Tìm kiếm theo:&nbsp;</span></div>
            <a href="#"><i class="fa">&nbsp;</i>Đang khuyến mãi</a>
            <a href="#"><i class="fa">&nbsp;</i>Mới nhất</a>
            <a href="#"><i class="fa">&nbsp;</i>Xem nhiều nhất</a>
        </div>

        <div style="clear: both"></div>
    </div><!--End Right Function-->
</section><!--End Category-->
<?php $cate++; endforeach; ?>

<section id="provider">
    <div id="advertise-left">
        <?php foreach($paddings as $padding): if($padding['type'] == 2){ ?>
            <a href="<?php echo $padding['url'];?>"><img src="<?php echo base_url($padding['image']);?>" width="218" height="328" alt="Quảng cáo bên trái"></a>
        <?php } endforeach;?>
    </div>
    <!--End Advertise Left-->

    <div id="logo-provider">
        <?php foreach ($getAllBrand as $getAllBrands){ ?>
            <a href="<?php echo base_url('search/thuonghieu/'.$getAllBrands['catID'],'.html')?>"><img src="<?php echo base_url($getAllBrands['catImage']);?>" alt="<?php echo base_url($getAllBrands['catName']);?>"></a>
        <?php }?>

    </div><!--End Logo Provider-->

    <div id="advertise-right">
        <?php foreach($paddings as $padding): if($padding['type'] == 3){ ?>
            <a href="<?php echo $padding['url'];?>"><img src="<?php echo base_url($padding['image']);?>" width="218" height="328" alt="Quảng cáo bên trái"></a>
        <?php } endforeach;?>
    </div><!--End Advertise Right-->

    <div style="clear: both"></div>
</section><!--End Provider-->

</div>
<!-- END Main_content -->