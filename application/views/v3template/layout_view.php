<!doctype html>
<html>
<head>
    <!-- This infomations is optimized with SEO -->
    <link href="<?php echo base_url('assets/font-end');?>/home-breadcrumb.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"><!-- Thay link ảnh biểu tượng website -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- Mã nguồn Website (Giữ nguyên) -->
    <meta charset="utf-8">

	<?php if(!empty($meta)){ ?>
	<title><?php echo $meta['title']; ?></title>
	<meta name="description" content="<?php echo $meta['description']; ?>"/>
	<meta name="keywords" content="<?php echo $meta['keywords']; ?>" />
	<?php }else { ?>
	<title>Vua bán lẻ | Home</title>
	<meta name="description" content="Vua bán lẻ"/>
	<meta name="keywords" content="Chuyên bán buôn bán lẻ" />
	<?php }?>

    <meta name="robots" content="noodp,index,follow" /><!-- Quy định cho robot (Giữ nguyên)-->
    <meta name="author" content="vuabanle, vuabanle.vn" /><!-- Tác giả website -->
    <meta http-equiv="content-language" content="vi_VN" /><!-- Ngôn ngữ cho website -->

    <meta property="og:locale" content="vi_VN" /><!-- Địa phương -->
    <meta property="og:type" content="article" /><!-- Phân loại website (Thường là article) -->
    <meta property="og:url" content="http://ten-website.com/" /><!-- Địa chỉ chính của Website -->
    <meta property="og:site_name" content="Tên website" /><!-- Tên Website-->
    <meta property="og:image" contddnt="http://ten-website.com/images/logo.jpg" /><!-- Đường dẫn ảnh logo công ty-->

    <!-- **CSS - stylesheets** -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/category.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/main-slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/main-menu.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/filter-price.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/popbox.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/checkout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/popup-bottom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/popup/style.popup.home.css">

    <!-- **jQuery** -->
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/libs');?>/jquery-ui.js"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/main-slider.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/brand-filter.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/filter-price.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery.popup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/popup-mail.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/popup/jquery.cookie.popup.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/popup/maincookie.popup.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/popbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/popup-bottom.js"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery.combinedScroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/fix-icon-menu-left.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/hide-advertise-top.js"></script>


    <script type='text/javascript' src='<?php echo base_url('assets/libs/jQuery_Validation/jquery.validate.js'); ?>'></script>
	<script type='text/javascript' src='<?php echo base_url('assets/libs/jQuery_Validation/localization/messages_vi.js'); ?>'></script>
	
	<!-- Lazy load image -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/2015/js/BttrLazyLoading/bttrlazyloading.min.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/2015/js/BttrLazyLoading/animate.min.css');?>" />

	<script src="<?php echo base_url('assets/2015/js/BttrLazyLoading/jquery.bttrlazyloading.min.js');?>"></script>

    <script src="<?php echo base_url('assets/2015/js/jquery.lazyload.js');?>"></script>


    <script type="text/javascript">
        $(function(){
            $("img.lazy").lazyload();

        });
    </script>



    <!-- // HOME -->
    <?php if($this->uri->segment(1) && $this->uri->segment(1) != null){ ?>
    	<!-- **CSS - stylesheets** -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/style-page.css">
		<!-- **jQuery** -->
    	<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/fix-top-page.js"></script>
    <?php }else { ?>
    	<!-- **CSS - stylesheets** -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/style-home.css">
		<!-- **jQuery** -->
		<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/fix-top.js"></script>
    <!-- // NO HOME -->
    <?php } ?>
    
   <script type="text/javascript">
   $(document).ready(function () {
	    getlist();
	});
	function formatCurrency(num) {
	    num = num.toString().replace(/\$|\,/g, '');
	    if (isNaN(num)) num = "0";
	    sign = (num == (num = Math.abs(num)));
	    num = Math.floor(num * 100 + 0.50000000001);
	    num = Math.floor(num / 100).toString();
	    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
	    num = num.substring(0, num.length - (4 * i + 3)) + ',' + num.substring(num.length - (4 * i + 3));
	    return (((sign) ? '' : '-') + num);
	}
	function getlist() {
	    $.ajax({
	        cache: false,
	        async: false,
	        url: '<?= base_url(); ?>cart/add',
	        type: "GET",
	        dataType: "json",
	        success: function (response) {
	            var count = 0;
	            var htmlString = '';

	            htmlString +='<div class="popup-header">';
	            htmlString +='<a class="close_popup" href="javascript:void(0)" onclick="close_popup()"></a>';
		            htmlString +='<table class="title-list-product">';
		            htmlString +='<tr>';
		                htmlString +='<td class="img-product-list">Sản phẩm</td>';
		                    htmlString +='<td class="name-product-list"></td>';
		                    htmlString +='<td class="price-product-list">Giá</td>';
		                    htmlString +='<td class="number-product-list">Số lượng</td>';
		                    htmlString +='<td class="sum-product-list">Tổng cộng</td>';
		                    htmlString +='</tr>';
		                htmlString +='</table>';
		            htmlString +='</div>';
		        htmlString +='<div class="info_popup">';
		        htmlString +='<div class="list-product">';
		            htmlString +='<table>';
			            $.each(response.data, function (key, value) {
			                count = count + 1;
			                var idHdPrice = 'hdPrice' + value.id;
			                var idddlGia = 'ddlGia' + value.id;
			                var idBtnXoa = 'btnXoa' + value.id;
			                var idDllQuantity = "dllQuantity" + value.id;
			                var idlblThanhTien = "lblThanhTien" + value.id;

			                htmlString +='<tr>';
		                    htmlString +='<td class="img-product-list"><a href="<?php echo base_url();?>'+value.seo_name+'"><img src="' +value.Picture+ '" alt="'+ value.Name +'" title="'+ value.Name +'" width="100"></a></td>';
	                        htmlString +='<td class="name-product-list">';
	                        htmlString +='<a href="<?php echo base_url();?>'+value.seo_name+'">'+ value.Name +'</a>';
	                            htmlString +='<div class="function-status">';
	                            htmlString +='<span class="status2">'+value.hang+'</span> | <a href="#" id=' + idBtnXoa + '  class="delete-product-item"  onclick="DeleteCart('+value.id+')">Xóa</a>';
	                                htmlString +='</div>';
	                            htmlString +='</td>';
	                            //console.log(value.giagiam);
	                        if(value.giagiam != null && value.giagiam != 0){
	                        htmlString +='<td class="price-product-list"><span class="new">'+ formatCurrency(value.giagiam)+' VNĐ</span><br><span class="old">'+ formatCurrency(value.gia)+' VNĐ</span></td>';
		                    }else{
		                    	htmlString +='<td class="price-product-list"><span class="new">'+ formatCurrency(value.gia)+' VNĐ</span><br></td>';
			                }

	                        htmlString +='<td class="number-product-list"><input id="quanlity'+ value.id +'" onchange="Calulator(' + value.id + ')" type="text" value="' +value.qty+ '"><input type="hidden" id="' + idHdPrice + '"  value ="' + value.Price + '"/><input type="hidden" id="rowid'+ value.id +'" class="" value="'+value.rowid+'" ></td>';
	                        htmlString +='<td class="sum-product-list hdpriceqty'+value.id+'">' +formatCurrency(value.qty*value.Price )+ ' VNĐ</td>';
	                        htmlString +='</tr>';
			            });

		                    htmlString +='</table>';
		                htmlString +='</div>';
		            htmlString +='<div class="continue">';
		            htmlString +='<span class="count-product">Bạn có <span class="color">' +response.total_record+ '</span> sản phẩm trong giỏ hàng</span><br><br>';
		                htmlString +='<a href="#" class="continue-buy">Quay lại tiếp tục mua hàng</a>';
		                htmlString +='</div>';
		            htmlString +='<div class="calculator">';
		            htmlString +='<table>';
		                htmlString +='<tr>';
		                    htmlString +='<td class="total">Tổng cộng</td>';
		                        htmlString +='<td class="number-total">' +formatCurrency(response.total)+ ' VNĐ</td>';
		                        htmlString +='</tr>';
		                    htmlString +='<tr>';
		                    htmlString +='<td class="total-money">Thành tiền</td>';
		                        htmlString +='<td class="number-total-money">' +formatCurrency(response.total)+ ' VNĐ</td>';
		                        htmlString +='</tr>';
		                    htmlString +='<tr>';
		                    htmlString +='<td></td>';
		                        htmlString +='<td class="vat">Đã bao gồm VAT</td>';
		                        htmlString +='</tr>';
		                    htmlString +='</table>';
		                htmlString +='<a href="<?php echo base_url('checkout/step2.html'); ?>" class="pay">Tiến hành đặt hàng </a>';
		                htmlString +='</div>';
		            htmlString +='</div>';



	            //console.log(count);
	            $("#popup_content").html(htmlString);
	            $("#lblCountCart").text(count + " Sản phẩm");
	            $(".number-cart").text(response.total_record);
	        }

	    });
	}

	function Calulator(id) {
	    var cartqty = $("#quanlity" + id).val();
	    var cartid = $("#rowid" + id).val();
	    var hdPrice = $("#hdPrice" + id).val();
	    $.ajax({
	        cache: false,
	        async: false,
	        url: '<?= base_url(); ?>cart/update',
	        type: "POST",
	        data: {
	            cartid: cartid,
	            qty: cartqty
	        },
	        dataType: "json",
	        success: function (response) {
	        	$(".hdpriceqty"+id).text(formatCurrency(cartqty * hdPrice) + ' VNĐ');
	            $(".number-total").text(formatCurrency(response.total) + ' VNĐ');
	            $(".number-total-money").text(formatCurrency(response.total) + ' VNĐ');
	            $(".color").text(response.total_record);
	            $(".number-cart").text(response.total_record);
	        }
	    });
	}

	function DeleteCart(id) {
	    var cartid = $("#rowid" + id).val();
	    //console.log(cartid);
	    $.ajax({
	        cache: false,
	        async: false,
	        url: '<?= base_url(); ?>cart/delete',
	        type: "POST",
	        data: {
	            cartid: cartid
	        },
	        dataType: "json",
	        success: function (response) {
	            getlist();
	        }
	    });
	}


	function mua(id, price, name) {
	    var id = id;
	    var price = price;
	    var name = name;
	    //console.log(name);
	    //console.log(price);
	    var quanlity = 1;
	    var color = $(this).attr('color');
	    $.ajax({
	        type: "POST",
	        dataType: "json",
	        async: false,
	        cache: false,
	        url: '<?= base_url(); ?>cart/add',
	        data: {
	            id: id,
	            price: price,
	            name: name,
	            qty: quanlity,
	            color: color
	        },
	        success: function (response) {
	            getlist();
	        }
	    });

	}

   function close_popup()
   {
       $("#popup_content").css("display", "none");
       $("#lean_overlay").css("display", "none");
   }
</script>

</head>

<body>

<div id="top-navibar">
    <div id="top-navibar-inner">
        <div class="hotline"><span><span style="color: #ff6600;">Hotline:</span> 04.6329.7119</span></div>
        <div class="social-button">

            <div class="google-plus item">
                <!-- Place this tag in your head or just before your close body tag. -->
                <script src="https://apis.google.com/js/platform.js" async defer></script>
                <!-- Place this tag where you want the +1 button to render. -->
                <div class="g-plusone" data-size="small"></div>
            </div>

            <!--<div class="like-facebook item">-->
            <!--<div id="fb-root"></div>-->
            <!--<script>(function(d, s, id) {-->
            <!--var js, fjs = d.getElementsByTagName(s)[0];-->
            <!--if (d.getElementById(id)) return;-->
            <!--js = d.createElement(s); js.id = id;-->
            <!--js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=291699171034536&version=v2.3";-->
            <!--fjs.parentNode.insertBefore(js, fjs);-->
            <!--}(document, 'script', 'facebook-jssdk'));</script>-->

            <!--<div class="fb-like" data-href="http://vuabanle.vn/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>-->
            <!--</div>-->
        </div>
    </div>
</div><!--End Top Navibar-->


<?php echo $config->code ?>


<!-- ORDER -->
<script type="text/javascript" language="JavaScript">
    $(function(){
        /* khởi tạo popup */
        $('input[rel*=miendatwebPopup]').showPopup({
            top : 60, //khoảng cách popup cách so với phía trên
            closeButton: ".close_popup" , //khai báo nút close cho popup
            closeButton: ".continue-buy" , //khai báo nút close cho popup
            scroll : false, //cho phép scroll khi mở popup, mặc định là không cho phép
            onClose:function(){

            }
        });
    });
</script>

 <script>
$(function() {
var availableTags = [
	<?php foreach($selectAllNameProduct as $selectAllNameProduc){ 
		echo '"'.$selectAllNameProduc['productName'].'",';
	}?>
];
$( "#keysearch" ).autocomplete({
source: availableTags
});
});
</script>

<div id="popup_content" class="popup">

</div><!--End Popup Content-->

<header id="header">
    <div id="header-inner">
        <div id="logo">
            <a href="<?php echo base_url();?>"><img id="logo-images" src="<?php echo base_url('assets/font-end');?>/css/images/logo.png" alt="Vua bán lẻ" title="Vua bán lẻ"></a>
        </div><!--End Logo-->

        <div id="search-box">
            <form id="search-form" action="<?= base_url('search') ?>" method="POST">
                <div id="search-input">
                    <div id="icon-search"></div>
                    <input type="text" name="keysearch" id="keysearch" class="key-search" placeholder="Nhập từ khóa tìm kiếm..." value>
                    <div id="group-search">
                        <div class="title-group" id="title-group">Tất cả danh mục</div>
                        <ul id="list-group">
                            <li>Tất cả danh mục</li>
                            <?php foreach($getCateSearchs as $getCateSearch):?>
                            <li>
                            	<input type="hidden" value="<?php echo $getCateSearch['catId'];?>" name="cat">
                            	<?php echo word_limiter($getCateSearch['catName'], 5, '...'); ?>
                            </li>
                            <?php endforeach;?>
                        </ul>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("ul#list-group li").click(function(){
                                    //shower = $(this).parent().next();
                                    shower = $("#title-group");
                                    //change
                                    shower.empty().append($(this).html());
                                });
                            });
                        </script>
                    </div>
                    <button type="submit" class="search-button">Tìm kiếm</button>
                </div>
            </form>
        </div><!--End Search Box-->
	
        <div id="login" class="">
            <span class="title-login">
            	<?php if($this->session->userdata('logged_in')){ ?>
            	<?php $login = $this->session->userdata('logged_in');?>
            	<div class="register-button-top">
            	    <a href="#"><?php echo $login['userName']; ?></a>
            	    <a href="<?php echo base_url('dang-xuat'); ?>">Thoát</a>
            	</div>
            	<?php }

                else { ?>
                <div class="register-button-top">
                    <a href="<?= base_url('dang-ky'); ?>.html">Đăng ký</a> | &nbsp;
                </div>

                <script type="text/javascript">
				    $(document).ready(function(){
				    	$("#subForm").validate({
							rules: {
								l_username: {
									required: true,
									email: true,
									minlength: 2,
									remote: {
										url: "<?php echo base_url('home/checkUser'); ?>",
									 	type: "post"
									}
								},
								l_password: {
									required: true,
									remote: {
										url: "<?php echo base_url('home/checkPass'); ?>",
									 	type: "post",
									 	data : {
									 			l_password: function()
									          	{
									            	return $('#subForm :input[name="l_password"]').val();
									          	},
									          	l_username: function()
									          	{
									            	return $('#subForm :input[name="l_username"]').val();
									          	}
										 	}
									}
								}
							},
							messages: {
								l_username: {
									required: "Không được để trống",
									minlength: "Họ và tên phải nhiều hơn 4 kí tự",
									email : "Email phải nhập đúng định dạng"
								},
								l_password: {
									required: "Không được để trống",
									remote: "Mật khẩu không đúng nhập lại "
								}
							},

							 submitHandler : function(form) {
						        	//var dataString = $(this.currentForm).serialize();
						        	//alert(dataString)
						        	$("#wait").css("display","block");
						        	$.ajax({
						            	url: "<?php echo base_url('register/saveAjax1');?>", 
						            	type: "POST",
						            	dataType  : 'json',
						            	data: $("#subForm").serialize(),
						            	success: function(response){
						                	console.log(response);
						                	
											$("#wait").css("display","none");
											alert("Bạn đã đăng nhập thành công ! cảm ơn");
						                    window.location.href = ("<?= base_url($this->uri->uri_string()); ?>");
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
				<div id="wait">
				   <img src="<?php echo base_url('assets/libs/imgs/loading.gif'); ?>" width="150" height="150" style="margin-top:200px;opacity:1"/>
				</div>
                <div class="popbox login-button-top">
                    <a class="open" href="#">Đăng nhập</a>
                    <div class="collapse">
                        <div class="box">
                            <div style="left: 165px;" class="arrow"></div>
                            <div style="left: 165px;" class="arrow-border"></div>

                            <form id="subForm">
                                <table>
                                    <tr>
                                        <td>Email <span class="red">*</span></td>
                                        <td><input name="l_username" id="l_username" type="text" class="text"></td>
                                    </tr>
                                    <tr>
                                        <td>Mật khẩu <span class="red">*</span></td>
                                        <td><input name="l_password" id="l_password" type="password" class="text"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><span class="forgot-pass"><a href="#">Quên mật khẩu?</a></span></td>
                                    </tr>
                                    <tr>
                                        <td class="button-f"><input type="submit" class="login" value="Đăng nhập"></td>
                                        <td class="button-f"><a href="#" class="close">Hủy bỏ</a></td>
                                    </tr>

                                </table>
                            </form>

                        </div>
                    </div>
                </div>
                <?php } ?>
            </span>
            <br>
            <span class="meta-login">Tài khoản & Đơn hàng</span>



            <script type="text/javascript" charset="utf-8">
                $(document).ready(function(){
                    $('.popbox').popbox();
                });
            </script>
        </div><!--End Login-->

        <div id="shopping-cart">
            <span class="title-login" href="#popup_content" rel="miendatwebPopup" name="open_popup" id="open_popup" class="buy-now">
            	<input type="button" value="Giỏ hàng" href="#popup_content" rel="miendatwebPopup" name="open_popup" id="open_popup" class="buy-now">
            	</span>&emsp;<span class="number-cart">0</span><br>
            <span class="meta-login">Sản phẩm</span>
        </div><!--End Shopping Cart-->
    </div><!--End Header Inner-->
</header><!--End Header-->
<section id="top">
    <div id="top-inner">
        <nav id="main-menu">
            <div id="title-menu">
                <h2>Danh mục sản phẩm</h2>
            </div>
            <ul id="main-menu-content">
            	<?php foreach ($menus as $menu):?>
                <li class="menu-item menu-item-1">
                    <div class="menu-icon-category">
                        <?php echo '<a href=',$menu['keypage'],'>';?>
                        <img src="<?php echo base_url($menu['icon']);?>">
                        </a>
                    </div>

                    <strong>
                    	<?php echo '<a href=',base_url($menu['keypage']),'>',word_limiter($menu['catName'], '6', '...'),'</a>';?>
                    </strong>

                    <div class="sub-cate">
                        <div class="level-1">
                            <ul>
                            	<?php if($menu['cate_child1']){ ?>
                            	<?php foreach ($menu['cate_child1'] as $menu2):?>
                                <li><a href="<?php echo base_url($menu2['keypage']);?>.html"><?php echo $menu2['catName']; ?></a>
                                	<?php if($menu2['cate_child2']){ ?>
                                    <div class="level-2">
                                        <ul>
                                        	<?php foreach ($menu2['cate_child2'] as $menu3):?>
                                        	<li><a href="<?php echo base_url($menu3['keypage']);?>.html"><?php echo $menu3['catName']; ?></a></li>
                                        	<?php endforeach;?>
                                        </ul>
                                    </div>
                                    <?php }?>
                                </li>
                                <?php endforeach;?>
                                <?php } ?>
                            </ul>
                        </div>

                        <div class="hot-product">
                        	<?php if(count(json_decode($menu['productcate'])) > 0 ){
                        	foreach (json_decode($menu['productcate']) AS $productcates ){ ?>
                            <div class="hot-product-item">
                                <div class="image-product-item">
                                    <a href="<?php echo $productcates->catUrlProduct;?>"><img src="<?php echo base_url($productcates->catProductImg); ?>" alt="<?php echo $productcates->catNameProduct;?>"></a>
                                </div>
                                <a href="<?php echo $productcates->catUrlProduct;?>" class="name-product-item"><span><?php echo $productcates->catNameProduct;?></span></a><br>
                                <span class="price-product-item"><?php echo Utility_model::price_format($productcates->PriceProduct);?> VNĐ</span>
                            </div><!--End Hot Product Item-->
                            <?php }}?>
                        </div><!--End Hot Product-->
                        <div class="img-thumb-menu-item">
                            <?php if(count(json_decode($menu['imgAds'])) > 0){
                            	$ad = 1;
                        		foreach(json_decode($menu['imgAds']) as $imgAd ){
									echo "<img src=$imgAd->linkAds alt=$imgAd->imgAd>";
                        		}
                        	}?>
                        </div>
                    </div>
                </li>
                <?php endforeach;?>
                <!--
                <div id="sale">
                    <a href="<?php echo base_url('khuyen-mai-lon');?>"><img src="<?php echo base_url('assets/font-end');?>/css/images/sale.jpg"></a>
                </div>
                -->
            </ul>
        </nav><!--End Main Menu-->

        <div id="policy">
            <div class="suggest-keyword">
                <a class="title">Xu hướng tìm kiếm:</a>
                    &nbsp;&nbsp;
                <a class="key" href="#">máy lọc nước</a>
                &nbsp;&nbsp;
                <a class="key" href="#">nước hoa hồng</a>
                &nbsp;&nbsp;
                <a class="key" href="#">may bay dieu khien</a>
                &nbsp;&nbsp;
                <a class="key" href="#">con quay tosy</a>
            </div>

            <div class="big-sale">
                <a class="item hot" href="#">Khuyến mại lớn tháng 4 <img src="http://static-v2.123mua.vn/default/images/icon_hot.gif"></a>
                <a class="item daily" href="#">Giá sốc mỗi ngày</a>
                <a class="item gift" href="#">Nhận quà tặng</a>
            </div>
        </div><!--End Policy-->
        <!--
        <div id="policy">
            <div class="cskh">
                <div>
                    <a class="tooltip" href="<?php echo base_url('chinh-sach/doi-tra-hang-trong-10-ngay.html'); ?>">
                        <div class="usp-sp-icon usp-sprite usp-sp-warp">
                            <div class="usp-sprite warp-animation"></div>
                            <div class="usp-sprite warp-static"></div>
                        </div>
                        <div class="usp-sp-desc">
                            <div class="strong uspline">Đổi trả hàng trong 10 ngày</div>
                            <div class="uspline-sub"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="cskh">
                <div>
                    <a class="tooltip" href="<?php echo base_url('chinh-sach/tra-tien-khi-nhan-hang.html'); ?>">
                        <div class="usp-sp-icon usp-sprite usp-sp-cash">
                            <div class="usp-sprite cash-animation"></div>
                            <div class="usp-sprite cash-static"></div>
                        </div>
                        <div class="usp-sp-desc">
                            <div class="strong uspline">Thanh toán khi nhận hàng</div>
                            <div class="uspline-sub"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="cskh">
                <div>
                     <a class="tooltip" href="<?php echo base_url('chinh-sach/van-chuyen-toan-quoc.html'); ?>">
                        <div class="usp-sp-icon usp-sp-ship usp-sprite">
                            <div class="usp-sprite ship-animation"></div>
                        </div>
                        <div class="usp-sp-desc">
                            <div class="strong uspline">Vận chuyển miễn phí</div>
                            <div class="uspline-sub"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div><!--End Policy-->

        <div id="hotline">
            <span>HOTLINE : <span class="orange">0932 221 285</span></span>
        </div><!--End Hotline-->
    </div><!--End Top Inner-->
</section><!--End Top-->



<!-- CONTENT -->
<?= $main_content ?>
<!-- END CONTENT -->

<footer>
    <div id="footer-module">
        <div class="footer-mod-1">
            <h4>Thông tin</h4>
            <div class="footer-mod-1-content">
                <ul>
                    <li><a href="<?= base_url('danh-cho-nhom-mua.html') ?>">Dành cho nhóm mua</a></li>
					<li><a href="<?= base_url('danh-cho-nha-cung-cap.html') ?>">Dành cho nhà cung cấp</a></li>
					<li><a href="<?= base_url('ve-vuabanle.html') ?>">Về vuabanle.vn</a></li>
					<li><a href="<?= base_url('tuyen-dung.html') ?>">Tuyển dụng</a></li>
					<li><a href="<?= base_url('tin-tuc.html') ?>">Tin tức</a></li>
					<li><a href="<?= base_url('khuyen-mai.html') ?>">Tin khuyến mại</a></li>
					<li><a href="<?= base_url('cam-ket-bao-mat-su-dung-thong-tin.html') ?>">Cam kết thông tin</a></li>
					<li><a href="#">Khiếu nại</a></li>
                </ul>
            </div>
        </div><!--End Footer Mod 1-->

        <div class="footer-mod-1">
            <h4>Hỗ trợ khách hàng</h4>
            <div class="footer-mod-1-content">
                <ul>
                    <li><a href="<?= base_url('lien-he.html') ?>">Liên hệ</a></li>
					<li><a href="<?= base_url('thanh-toan-mua-hang-tai-vuabanle.html') ?>">Phương thức thanh toán</a></li>
					<li><a href="<?= base_url('huong-dan-mua-hang.html') ?>">Hướng dẫn mua hàng</a></li>
					<li><a href="#">Chính sách đổi trả hàng</a></li>
					<li><a href="#">Trung tâm bảo hành</a></li>
					<li><a href="#">Báo phí vận chuyển</a></li>
					<li><a href="<?= base_url('chinh-sach-bao-hanh.html') ?>">Chính sách bảo hành</a></li>
                </ul>
            </div>
        </div><!--End Footer Mod 1-->

        <div class="footer-mod-2">
            <h4>Chăm sóc khách hàng</h4>
            <div class="footer-mod-2-content">
                <div class="support-item">
                    <img src="<?php echo base_url('assets/font-end');?>/images/support/2-1.jpg" width="57" height="57" alt="Nhân viên hỗ trợ 1">
                    <span class="support-name">Thu Hằng</span><br>
                    <span class="support-phone">04 6269 1411</span>
                </div><!--Support Item-->

                <div class="support-item">
                    <img src="<?php echo base_url('assets/font-end');?>/images/support/2.jpg" width="57" height="57" alt="Nhân viên hỗ trợ 1">
                    <span class="support-name">Hoàng Lan</span><br>
                    <span class="support-phone">04 6269 1444</span>
                </div><!--Support Item-->

                <div class="support-item">
                    <img src="<?php echo base_url('assets/font-end');?>/images/support/3.jpg" width="57" height="57" alt="Nhân viên hỗ trợ 1">
                    <span class="support-name">Hoàng Tạo</span><br>
                    <span class="support-phone">0964 753 311</span>
                </div><!--Support Item-->

                <div class="support-item">
                    <img src="<?php echo base_url('assets/font-end');?>/images/support/4.jpg" width="57" height="57" alt="Nhân viên hỗ trợ 1">
                    <span class="support-name">Hà Kiên</span><br>
                    <span class="support-phone">0902 108 748</span>
                </div><!--Support Item-->

                <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=4058" class="spres-regester" target="_blank"> <img src="http://vuabanle.vn/public/font-end/images/chungnhan.jpg" title="" alt=""></a>

            </div>
        </div><!--End Footer Mod 1-->

        <div class="footer-mod-2">
            <h4>Đăng ký nhận tin khuyến mãi</h4>
            <div class="footer-mod-2-content">
                <table>
                    <tr>
                        <td><input type="text" placeholder="Nhập Email của bạn để đăng ký" value class="email-text"></td>
                        <td><input type="button" value="Đăng ký" class="register-button"></td>
                    </tr>
                </table>
            </div>
        </div><!--End Footer Mod 2-->

        <div class="footer-mod-2">
            <h4>Hỗ trợ thanh toán</h4>
            <div class="footer-mod-2-content">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/card.jpg" alt="card">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/AGRIBANK.jpg" alt="AGRIBANK">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/BIDV.jpg" alt="BIDV">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/MARITIME.jpg" alt="MARITIME">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/TECHCOM.jpg" alt="TECHCOM">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/VIETCOMBANK.jpg" alt="VIETCOMBANK">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/Vietinbank.jpg" alt="Vietinbank">

            </div>
        </div><!--End Footer Mod 2-->

        <div class="footer-mod-2">
            <h4></h4>
            <div class="footer-mod-2-content">
                <div class="share-icon">
                    <a href="https://twitter.com/Vuabanlevn" ta="" class="twitter" target="_blank"></a><span> Twitter</span>
                    <a href="https://www.facebook.com/Vuabanle.vn?ref=hl" class="facebook" target="_blank"></a><span>Facebook </span>
                    <a href="https://plus.google.com/+VuabanleVnVuabanlevietnam" rel="publisher" class="google" target="_blank"></a><span>Google</span>
                </div>
            </div>
        </div><!--End Footer Mod 2-->

    </div><!--End Footer Module-->

    <div id="copy-right">
        <span>
        	<?php 
        	echo ($config->site_footer);
        	?>
        </span>
    </div><!--End Copy Right-->

    <!--Popup Register Email-->
    <script>
        $(function(){
            $('.slide-out-div').tabSlideOut({
                tabHandle: '.handle',                              //class of the element that will be your tab
                pathToTabImage: 'assets/font-end/css/images/icon-email-register.gif',          //path to the image for the tab (optionaly can be set using css)
                imageHeight: '229px',                               //height of tab image
                imageWidth: '90px',                               //width of tab image
                tabLocation: 'left',                               //side of screen where tab lives, top, right, bottom, or left
                speed: 300,                                        //speed of animation
                action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
                bottomPos: '200px',                                   //position from the top
                fixedPosition: false,                           //options: true makes it stick(fixed position) on scroll
            });
        });
    </script>

    <style>
        .handle{
            top: -37px !important;
        }
    </style>

<script type="text/javascript">
    $(document).ready(function(){
    	var usser = $("#username_rg").val();
    	$("#mail_form").validate({
			rules: {
				username_rg: {
					required: true,
					minlength: 2,
				},
				email_rg: {
					required: true,
					email: true,
					remote: {
						url: "<?php echo base_url('home/checkEmail'); ?>",
					 	type: "post",
					},
				},
			},
			messages: {
				username_rg: {
					required: "Không được để trống",
					minlength: "Họ và tên phải nhiều hơn 4 kí tự"
				},
				email_rg: {
					required: "Không được để trống",
					email : "Email phải nhập đúng định dạng",
					remote: "Email đã tồn tại trong hệ thống",
				},
			},
		});
        
    });
</script>
<?php
$addmail = $this->session->userdata('addMailSeccuess');  
?>
<!--
<?php if($addmail['checksection'] == false || $login['userName'] =! '') { ?>
	<div class="slide-out-div">
        <a class="handle" href="#">Content</a>
        <div id="register-mail-form">
            <div class="title"></div>
            <form id="mail_form" method="post" action="<?= base_url('dang-ky.html') ?>">
                <div class="input">
                    <input  name="username_rg" id="username_rg" type="text" placeholder="Họ tên" required>
                    <input  name="email_rg" id="email_rg" type="text" placeholder="@Email" required>

                    <div class="align-center">
                        <input class="submit btn-inverse" id="submit1" type="submit" value="Nam">
                        <input class="submit btn-inverse"  id="submit" type="submit" value="Nữ">
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php }?>
-->


    <!--End Popup Bottom -->
    <!-- 
    <div id="bottombar">
        <div class="bb_open clearfix" onclick="toggle_bb();">
            <a class="bottomright">
                <p>Lễ hội mua sắm - mùa Noel</p>
            </a>

            <a class="open_pop">Open</a>
        </div>

        <div class="bb_close clearfix">
            <a href="javascript://" id="closebb" onclick="toggle_bb();">x</a>
        </div>

        <div class="bottombar">
        <span id="bannerHolderHomeCenter29">
            <a target="_blank" href="http://www.vuabanle.vn/khuyen-mai-dac-biet.html">
                <img alt="" width="330px" height="auto" border="0" src="<?php echo base_url('assets/img');?>/small-bottom-popup.png">
            </a>
        </span>

            <div class="emailto">
                <span class="goimuahang">Rất nhiều sản phẩm hấp dẫn đang chờ bạn</span>
            </div>
        </div>
    </div>
     -->

</footer>

</body>
</html>

