<section id="main-page">
    <style>
        .big-category .item:nth-child(3n+3){
            margin-right: 0px !important;
        }
    </style>

    <aside id="filter">
        <div class="type-filter all-product">
            <h6 class="title-filter">Tất cả sản phẩm</h6>
            <div class="content-filter">
                <ul>
                    <?php foreach ($getCateUris as $getCateUri):?>
                        <li><a href="<?php echo base_url($getCateUri['keypage']); ?>"><?php echo word_limiter($getCateUri['catName'], 6, '...');?><span class="count">(<?php echo $getCateUri['count'];?>)</span></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div><!--End Type Filter-->

        <div class="type-filter brand-product">
            <h6 class="title-filter">Thương hiệu</h6>
            <div class="content-filter">
                <input id="filter12" placeholder="Tìm theo thương hiệu..." />
                <input id="search-brand-button" type="button" value="">
                <br/>
                <ul id="root_tree">
                    <?php foreach ($getBrandUsingCates as $getBrandUsingCate):?>
                        <li><a href="<?php echo base_url($getCategoryDetail->keypage.".html?brand=".$getBrandUsingCate['ID']);?>"><?php echo word_limiter($getBrandUsingCate['Name'], 6, '...');?><span class="count">(<?php echo $getBrandUsingCate['countPro'];?>)</span></a></li>
                    <?php endforeach;?>
                </ul>

                <script type="text/javascript">
                    $(function() {
                        $('#filter12').treeListFilter('#root_tree', 200);
                    });
                </script>
            </div>
        </div><!--End Type Filter-->

        <!--

        <div class="type-filter filter-price">
            <h6 class="title-filter">Giá sản phẩm</h6>
            <div class="content-filter">

                <div class="nstSlider" data-range_min="100000" data-range_max="50000000"
                     data-cur_min="10000000"  data-cur_max="40000000">
                    <div class="bar"></div>
                    <div class="leftGrip"></div>
                    <div class="rightGrip"></div>
                </div>

                <form class="price-index">
                    <div class="index">
                        <div class="leftLabel" /></div><span>VNĐ</span>
            </div>
            <div class="index">
                <div class="rightLabel" /></div><span>VNĐ</span>
        </div>
        <input class="filter-price-button" type="submit" value="">
        </div>

        <script>
            $('.nstSlider').nstSlider({
                "rounding": {
                    "100": "1000",
                    "1000": "10000",
                    "10000": "100000"
                },
                "left_grip_selector": ".leftGrip",
                "right_grip_selector": ".rightGrip",
                "value_bar_selector": ".bar",
                "value_changed_callback": function(cause, leftValue, rightValue) {
                    var $container = $(this).parent();
                    $container.find('.leftLabel').text(leftValue);
                    $container.find('.rightLabel').text(rightValue);
                }
            });
        </script>

        </div>
        </div><!--End Type Filter-->

        <!--
        <div class="type-filter rank-star all-product">
            <h6 class="title-filter">Đánh giá</h6>
            <div class="content-filter">
                <ul>
                    <li><a href="#">Trang điểm <span class="count">(73)</span></a></li>
                    <li><a href="#">Dưỡng da <span class="count">(32)</span></a></li>
                    <li><a href="#">Nước hoa <span class="count">(65)</span></a></li>
                    <li><a href="#">Chăm sóc tóc <span class="count">(11)</span></a></li>
                    <li><a href="#">Sữa tắm cao cấp <span class="count">(24)</span></a></li>
                    <li><a href="#">Kem dưỡng da tay, móng tay <span class="count">(43)</span></a></li>
                </ul>
            </div>
        </div><!--End Type Filter-->



        <div style="clear: both"></div>
        <!--<img class="lazy" class="lazy" src="filter.jpg" width="100%">-->
    </aside><!--End Filter-->

    <article id="content-page">
        <!-- BreadCrumb -->
        <?php echo $bradcrumbs;?>
        <!--End BreadCrumb-->
        <div class="big-category">
            <?php $child = 1; foreach ($getCategory2levels as $getCategory2level):?>
                <div class="item sub<?= $getCategory2level['catid'] ?>">
                    <h2 class="title"><a href="<?= $getCategory2level['keypage'];?>"><?php echo $getCategory2level['catName'];?></a></h2>
                    <div class="list-small-category">
                        <ul>
                            <?php if(count($getCategory2level['CatChild']) < 4) {?>
                                <script type="text/javascript">
                                    $( ".sub<?= $getCategory2level['catid'] ?>" ).addClass( "4remove" );
                                    $(".4remove").remove();
                                </script>
                            <?php } ?>
                            <?php foreach($getCategory2level['CatChild'] as $getCategory2levelCatChild ): ?>
                                <li><a href="<?= $getCategory2levelCatChild['keypage'] ?>"><?= $getCategory2levelCatChild['catName'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="img-thumb">
                        <a href="<?php echo $getCategory2level['keypage'];?>"><img class="lazy" src="<?php if($getCategory2level['catImage'] != ""){ echo base_url($getCategory2level['catImage']); }else { echo base_url('public/font-end/images').'/imgdanhmuc.jpg'; } ?>" alt="tên chuyên mục" title="Tên chuyên mục"></a>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <?php  $child++ ; endforeach;?>

            <div style="clear: both"></div>
        </div><!--End Big Category-->


        <div id="price-range-list">
            <h4 id="title-price-range-list">Hãy chọn giá tốt</h4>
            <ul>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=1000&rightLabel=300000" ?>">Dưới 300.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=300000&rightLabel=500000" ?>">300.000 - 500.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=500000&rightLabel=1000000" ?>">500.000 - 1.000.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=1000000&rightLabel=2000000" ?>">1.000.000 - 2.000.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=2000000&rightLabel=3000000" ?>">2.000.000 - 3.000.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=3000000&rightLabel=99000000" ?>">Trên 3.000.000 VNĐ</a></li>
            </ul>
        </div><!--End Price Range List-->

        <?php foreach($getSubMenus as $getSubMenu): ?>

        <div id="main-content">
            <div class="task-main-content">
                <h1 class="title-main-content"><a href="<?= $getSubMenu['keypage']  ?>"><?= $getSubMenu['catName']  ?></a></h1>
                <!--
                <div class="filter-more">
                    <a href="#">Đang khuyến mãi</a>
                    <a href="#">Mới nhất</a>
                    <a href="#">Xem nhiều nhất</a>
                </div>
                -->
                <div class="view-more-category">
                    <a href="<?= $getSubMenu['keypage']  ?>">XEM TẤT CẢ</a>
                </div>
            </div>
            <div class="main-content-inner">
                <?php foreach ($getSubMenu['subProducts'] as $subProduct): ?>


                <div class="product-item">
                    <div class="img-product-item">
                        <a href="<?php echo base_url($subProduct['seo_name']); ?>.html"><img class="lazy" data-original="<?php echo base_url($subProduct['productImage']); ?>" src="<?php echo base_url('assets/2015/js/loading.gif');?>" alt="<?php echo $subProduct['productName'];?>" title="<?php echo $subProduct['productName'];?>"></a>
                    </div>
                    <h2 class="product-name"><a href="<?php echo base_url($subProduct['seo_name']); ?>.html"><?php echo  word_limiter($subProduct['productName'], 9,'...'); ?></a></h2>
                    <div class="product-price">
                        <?php if($subProduct['giamgia'] == "" || $subProduct['giamgia'] == null || $subProduct['giamgia'] == 0){ ?>
                            <div class="new-price"><?= Utility_model::price_format($subProduct['gia']); ?>  vnđ</div>
                        <?php }else { ?>
                            <span class="new-price"><?= Utility_model::price_format($subProduct['giagiam']); ?> vnđ</span>
                            <br>
                            <span class="old-price"><?= Utility_model::price_format($subProduct['gia']); ?> vnđ</span>
                            <br>
                        <?php } ?>

                        <div class="status-product">
                            <?php if($subProduct['tinhtranghang'] == 1 ){ ?>
                                <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus1.gif"); ?>">
                            <?php } ?>

                            <?php if($subProduct['tinhtranghang'] == 2 ){ ?>
                                <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus2.gif"); ?>">
                            <?php } ?>

                            <?php if($subProduct['tinhtranghang'] == 3 ){ ?>
                                <img class="lazy" src="<?php echo base_url("assets/font-end/images/pro/StockStatus3.gif"); ?>">
                            <?php } ?>
                        </div>


                        <div class="small-info">
                            <span class="count-view" title="Lượt xem sản phẩm" style="cursor: help"><?php if($subProduct['view'] != ""){ echo  @$getSubMenu['view']; } ?></span><br>
                    <span class="local-ship" title="Địa điểm giao hàng" style="cursor: help"><?php if($subProduct['ghod'] != null){ ?>
                            <?= $subProduct['ghod'] ?>
                        <?php }else { ?>
                            Toàn Quốc
                        <?php }?></span>
                        </div>


                    </div>
                    <div class="button-buy">
                        <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $subProduct['productID']; ?>,<?php  if($subProduct['giamgia'] == "" || $subProduct['giamgia'] == null || $subProduct['giamgia'] == 0){ echo $subProduct['gia']; }else{ echo $subProduct['giagiam']; } ?>, '<?= $subProduct['productName']; ?>' )"/>
                    </div>
                    <?php if($subProduct['giamgia'] == "" || $subProduct['giamgia'] == null || $subProduct['giamgia'] == 0){ ?>
                    <?php }else { ?>
                        <div class="product-mask">
                            <span>-<?= round(($subProduct['gia']-$subProduct['giagiam']) / $subProduct['gia'] * 100, 1); ?>%</span>
                        </div>
                    <?php } ?>
                </div><!--End Product Item-->

                <?php endforeach; ?>

            </div>
        </div><!--End Main Content-->
        <?php endforeach; ?>

        <div style="clear: both"></div>
    </article><!--End Content Page-->

    <div style="clear: both"></div>

</section>