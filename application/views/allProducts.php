<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?= $meta['title']?></title>
<meta name="description" content="<?= $meta['description']?>">
<meta name="keywords" content="<?= $meta['keywords']?>">
<link rel="icon" type="image/ico" href="<?php echo base_url().'public/libs/';?>favicon.ico"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/magnific-popup.css">
<script type="text/javascript" src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.js"></script>
<script src="<?= base_url('public/font-end')?>/js/menucatalog.js"></script>
<script src="<?= base_url('public/font-end')?>/js/1399642332.js"></script>
<link rel="stylesheet" href="<?= base_url('public/font-end')?>/css/popupwindow.css">
<script src="<?= base_url('public/font-end')?>/js/popupwindow.js"></script>
<script src="<?= base_url('public/font-end')?>/js/demo.js"></script>
</head>
<script src="<?= base_url('public/font-end')?>/js/jquery-scrolltofixed.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    $('#nav-top').scrollToFixed();
    $('.footer').scrollToFixed( {
        bottom: 0,
        limit: $('.footer').offset().top
    });
    var summaries = $('.summary');
    summaries.each(function(i) {
        var summary = $(summaries[i]);
        var next = summaries[i + 1];
        summary.scrollToFixed({
            marginTop: $('#nav-top').outerHeight(true) + 10,
            limit: function() {
                var limit = 0;
                if (next) {
                    limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                } else {
                    limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                }
                return limit;
            },
            zIndex: 999
        });
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
});
</script>
<body data-control="Catalog">
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",10378]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
	<div id="page-top">
		<div class="pagecuston">
			<div class="wrap">
                <ul class="menu-top">
                    <li><h4 class="scroll">HOTLINE: <?= $config->owner_fax; ?></h4></li>
                    <?php $session_data = $this->session->userdata('logged_in');
                            if(!$session_data){ ?>
                    <li><a id="open-pop-up-1" href="#pop-up-1" >Đăng nhập</a></li>
                        <div id="pop-up-1" class="pop-up-display-content" >
                            <div class="plans_table">
                                <h2 class="h2-login">Đăng nhập</h2>
                                <div id="login">
                                    <h2> <span class="fontawesome-lock"></span>Khách hàng đã đăng ký </h2>
                                    <form id="contact" action="<?= base_url('dang-nhap/kiem-tra'); ?>" method="POST">
                                        <fieldset>
                                            <p> <label for="email">E-mail (*) </label> </p>
                                            <p> <input type="text" id="email" name="email" > </p>
                                            <!-- JS because of IE support; better: placeholder="mail@address.com" -->
                                            <p> <label for="password">Password (*)</label> </p>
                                            <p> <input type="password" id="password"name="password"> </p>
                                            <!-- JS because of IE support; better: placeholder="password" -->
                                            <p> <label>Quên mật khẩu?</label> </p>
                                            <p> <input type="submit" value="Đăng nhập"> </p>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- end login -->
                                <div id="res">
                                    <h2> <span class="fontawesome-lock"></span>Khách hàng chưa đăng ký </h2>
                                    <form action="<?= base_url('dang-ky'); ?>" method="POST">
                                        <fieldset>
                                            <p> <label>Bạn là khách hàng mới của vuabanle.vn? Vui lòng đăng ký và trải nghiệm mua hàng online tại vuabanle.vn.</label></p>
                                            <p><input type="submit" value="Đăng ký"></p>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- end login -->
                        </div> <!-- end plans_table -->
                    </div> <!-- end pop-up-1 -->
                            <?php  } else{
                            $memberdata=$this->session->userdata('logged_in');?>
                            <li><a href="<?php echo base_url().'quan-ly-tai-khoan'.'.html'?>">
                            <?php echo $memberdata['userName']; echo "</li>"; ?>
                            <li><a href="<?php echo base_url().'dang-xuat'?>">Đăng xuất</a></li>    
                            <?php } ?>
                </ul>
            </div>
		</div>
	</div>
	<!-------end#page-top--->

				
				
<!-- CART -->
<div id="pop-up-2" class="pop-up-display-content">
	
										<div class="plans_table">
											<div class="ther">
												<div class="plans-list1">
													<h3>Tên sản phẩm</h3>
												</div>
												<div class="plans-list3">
													<h3>Giá</h3>
												</div>
												<div class="plans-list2">
													<h3>Số lượng</h3>
												</div>
												<div class="plans-list3">
													<h3>Thành tiền</h3>
												</div>
												<div class="plans-list2">
													<h3></h3>
												</div>
											</div>
											<div class="summomy">
												<h4>
													<label id="lblTotalPrice">0</label>
												</h4>
												<p>Đã bao gồm thuế</p>
											</div>
											<div class="tfoo">
												<div class="order_now">
													<a href="<?php echo base_url();?>" onclick="Back()">Quay
														lại mua hàng</a>
												</div>
												<div class="order_now">
													<a href="<?php echo base_url('checkout/step1.html');?>">Tiến
														hành thanh toán</a>
												</div>
											</div>
										</div>
										<button title="Close (Esc)" type="button" class="mfp-close">×</button>
									</div>
	
<script type="text/javascript">
$(document).ready(function() {
	getlist();
});
function formatCurrency(num) 
 {
    num = num.toString().replace(/\$|\,/g,'');
    if(isNaN(num))
    num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num*100+0.50000000001);
    num = Math.floor(num/100).toString();
    for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
    num = num.substring(0,num.length-(4*i+3))+','+
    num.substring(num.length-(4*i+3));
    return (((sign)?'':'-') + num);
}
function getlist()
{
	 $.ajax({
         cache: false,
         async: false,
         url: '<?= base_url(); ?>cart/add',
         type: "GET",
         dataType: "json",
         success: function (response) {
        	 var count = 0;
             var htmlString = '';
             htmlString += '<div class="ther"><div class="plans-list1"><h3>Tên sản phẩm</h3></div><div class="plans-list3"><h3>Giá</h3></div><div class="plans-list2"><h3>Số lượng </h3></div><div class="plans-list3"><h3>Thành tiền</h3></div><div class="plans-list2"><h3></h3></div></div>';
             htmlString += '<div class="plans_table">';
             
             $.each(response.data, function (key, value) {
                 count = count + 1;
                 var idHdPrice = 'hdPrice' + value.id;
                 var idddlGia = 'ddlGia' + value.id;
                 var idBtnXoa = 'btnXoa' + value.id;
                 var idDllQuantity = "dllQuantity" + value.id;
                 var idlblThanhTien = "lblThanhTien" + value.id;
                 

                 htmlString += '<div class="tboo">';
                 htmlString += '<div class="plan_list_title">';
                 htmlString += ' <img src="' + value.Picture + '" alt="" width="160" height="160"/>';
                 htmlString += '<h4>' + value.Name + '</h4>';
                 htmlString += '</div>';
                 //htmlString += '<div class="price_body1">' + acong + 'string.Format(System.Globalization.CultureInfo.GetCultureInfo("vi-VN"), "{0:0,0}",' + value.Price + ') VNĐ</div>';
                 htmlString += '<div class="price_body1">' + formatCurrency(value.Price )+"VND"+' VNĐ</div>';
                 htmlString += '<input type="hidden" id="' + idHdPrice + '"  value ="' + value.Price + '"/>';
                 htmlString += '<div class="price_body2">';
                 //htmlString += acong+'Html.DropDownListFor(model => item.Quantity, "", new { id = "' + idddlGia + '" })';
                 //htmlString += '<select id="' + idDllQuantity + '"  onchange="Calulator(' + value.id + ')"><option value="">1</option></select>';
                 //htmlString += '<input type="text" onchange="Calulator(' + value.qty + ')" class="cart_qty" value="'+value.qty+'" >';
                 htmlString += '<input type="text" id="quanlity'+ value.id +'" onchange="Calulator(' + value.id + ')" class="" value="'+value.qty+'" >';
                 htmlString += '<input type="hidden" id="rowid'+ value.id +'" class="" value="'+value.rowid+'" >';
                 htmlString += '</div>';
                 htmlString += '<div class="price_body2"><button id="' + idBtnXoa + '" onclick="DeleteCart(' + value.id + ')">[Xóa]</button></div>';
                 htmlString += '</div>';
             });
             // htmlString += '<div class="summomy"><h4>Tổng tiền : <span>2.000.000 VNĐ</span></h4><p>Đã bao gồm thuế</p></div><div class="tfoo"><div class="order_now"><a href='@Url.Action("Index", "Product")' >Quay lại mua hàng</a></div><div class="order_now"><a href="Login-Thanhtoan.html">Tiến hành thanh toán</a></div></div>';
             //htmlString += '<div class="summomy"><h4><label id="lblTotalPrice">'+  response.total +'</label></h4><p>Đã bao gồm thuế</p></div><div class="tfoo"><div class="order_now"><a href="/" onclick="Back()">Quay lại mua hàng</a></div><div class="order_now"><a href="/login-thanhtoan">Tiến hành thanh toán</a></div></div>';
             htmlString += '</div></div>';
             htmlString += '<div class="summomy"><h4 class="tonghang"> '+  response.total_record +' Sản phẩm </h4><h4><label id="lblTotalPrice">'+  formatCurrency(response.total) +' VND </label></h4><p>Đã bao gồm thuế</p></div><div class="tfoo"><div class="order_now"><a href="<?php echo base_url(); ?>">Quay lại mua hàng</a></div><div class="order_now"><a href="<?php echo base_url('checkout/step1.html'); ?>">Tiến hành thanh toán</a></div></div><div style="clear:both;"></div>';
             htmlString += '<button title="Close (Esc)" type="button" class="close"></button>';
             //console.log(count);
             $("#pop-up-2").html(htmlString);
             $("#lblCountCart").text(count + " Sản phẩm");
             $(".all_cart").text(response.total_record );
         }
     	
	 });
}

function Calulator(id) {
	var cartqty = $("#quanlity"+id).val();
	var cartid = $("#rowid"+id).val();
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
        success : function (response) {
            $("#lblTotalPrice").text('Tổng tiền: ' + formatCurrency(response.total) + ' VNĐ' );
            $(".tonghang").text(response.total_record );
            $(".all_cart").text(response.total_record );
        }
    });
}
function DeleteCart(id) {
	var cartid = $("#rowid"+id).val();
	console.log(cartid);
        $.ajax({
            cache: false,
            async: false,
            url: '<?= base_url(); ?>cart/delete',
            type: "POST",
		    data: {
	           cartid: cartid
		    },
            dataType: "json",
            success : function (response) {
                getlist();
            }
        });
    }


function mua(id, price, name)
{
	//var id = parseInt($(this).attr('proid'));
    //var price = $(this).attr('price');
    //var name = $(this).attr('name');
    var id = id;
    var price = price;
    var name = name;
    console.log(name);
    console.log(price);
    
    var quanlity = 1;
    var color =  $(this).attr('color');
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
	            color: color,
	        },        
	        success: function (response) {
	        	getlist();
	        }
    	});

}
</script>	
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-shop').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-on'
	});
								
});
</script>

<!-----------EndGio hang-->
<!-- END CART -->
	<div id="page-all">
		<div id="header">
			<div class="header_top">
				<div class="wrap">
					<div class="logo">
                        <a href="<?= base_url(); ?>">
                        <img src="<?= base_url('public/font-end')?>/images/logo.png" alt="" title="logo" /></a>
					</div>
					<!-------end#logo--->
					<div class="shopping-header">
                      <link href="<?= base_url('public/font-end')?>/css/tooltip.css" rel="stylesheet" type="text/css" />
                                        <script src="<?= base_url('public/font-end')?>/js/tooltip.js" type="text/javascript"></script>
                        <div class="cskh">
                            <div><a class="tooltip" href="#demo7_tip " onmouseover="tooltip.pop(this, '#demo7_tip')">
                              <div class="usp-sp-icon usp-sprite usp-sp-warp">
                                <div class="usp-sprite warp-animation"></div>
                                <div class="usp-sprite warp-static"></div>
                              </div>
                              <div class="usp-sp-desc">
                                <div class="strong uspline"> Đổi trả hàng 
                                  trong 10 ngày</div>
                                <div class="uspline-sub"></div>
                              </div>
                              </a>
                            </div>
                              <div  style="display:none;">
                                <div id="demo7_tip" >
                                  <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày                                                             kể nhận hàng.</b> 
                                  </div>
                                  <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày                                                              theo mọi hình thức , chi tiết xem tại <a href="<?= base_url().'chinh-sach/doi-tra-hang-trong-10-ngay.html'; ?>"> đây</a>
                                                        </span>  
                                  </div>
          </div>
        </div>
                        </div>
                        <div class="cskh">
                            <div><a class="tooltip" href="#demo8_tip " onmouseover="tooltip.pop(this, '#demo8_tip')">
                              <div class="usp-sp-icon usp-sprite usp-sp-cash">
                                <div class="usp-sprite cash-animation"></div>
                                <div class="usp-sprite cash-static"></div>
                              </div>
                              <div class="usp-sp-desc">
                                <div class="strong uspline"> Thanh toán khi 
                                  nhận hàng</div>
                                <div class="uspline-sub"></div>
                              </div>
                              </a>
                            </div>
                                <div  style="display:none;">
                                  <div id="demo8_tip" >
                                       <div class="tt-title"> <b>Bạn e ngại về việc thanh toán qua thẻ?</b></div>
                                       <div class="tt-desc">Hãy chọn giải pháp trả tiền mặt cho nhân
                                    viên giao hàng của chúng tôi khi nhận được hàng. <br>
                                    chi tiết xem tại <a href="<?= base_url().'chinh-sach/tra-tien-khi-nhan-hang.html'; ?>">đây</a></div>
                                  </div>
                               </div>
                        </div>
                        <div class="cskh">
                        <div><a class="tooltip" href="#demo9_tip " onmouseover="tooltip.pop(this, '#demo9_tip')">
                          <div class="usp-sp-icon usp-sp-ship usp-sprite">
                            <div class="usp-sprite ship-animation"></div>
                          </div>
                          <div class="usp-sp-desc">
                            <div class="strong uspline">Vận chuyển
                              miễn phí</div>
                            <div class="uspline-sub"></div>
                          </div>
                          </a>
                        </div>
                              <div  style="display:none;">
                                 <div id="demo9_tip" >
                                   <div class="tt-title">
                                    <b>Miễn phí vận chuyển </b>
                                   </div>
                                   <div class="tt-desc">
                                    SmartViet giao hàng miễn phí toàn quốc cho đơn hàng <b>trên
                                        100.000 VND </b> Xem thêm chi tiết tại <a href="<?= base_url().'chinh-sach/van-chuyen-toan-quoc.html'; ?>">shipping</a>
                                   </div>
                                 </div>
                             </div>
                      </div>
                        
                        <div class="cskh">
                            <div>
                                <a href="<?= base_url('checkout'.'.html') ?>">
                                    <div class="usp-sp-icon usp-sprite usp-sp-cart ">
                                        <div class="usp-sprite cart-animation"></div>
                                    </div>
                                    <div class="usp-sp-desc">
                                        <div class="strong uspline">
                                            <span style="color: red; line-height: 26px;">(<span class="all_cart"><?php if(isset($cart)){ echo $cart; }else { echo "0"; } ?></span>) </span> Giỏ
                                            hàng
                                        </div>
                                        <div class="uspline-sub"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
					<!-----end#shopping_header--->

				</div>
				<!-----end#header-top--->
				<div id="nav-top">
					<div class="wrap">
						<div class="menu-top">



							<div class="MainBar">
								<nav id="menu" class="hdMenu">
									<div class="navWrapper navWrapper-index navWrapper-mu"
										id="spinbasketmenu">
										<div class="nav-sub-visible">
											<div class="navWrapperBackground">
												<div class="navWrapperBackground_arrow"></div>
											</div>
											<a class="navAllCat " href="#"> Danh mục sản phẩm </a> <a
												class="navDropdown" href="#"></a>
											<div class="navSub-wrapper">
												<ul class="navSub ">
                                                    <?php foreach($getParentID0s as $getParentID0): ?>
                                                    <li class="multiMenu"  data-sub-menu="navLayer_<?= $getParentID0['catID'] ?>">
                                                        <a class="catArrow " href="<?= base_url($getParentID0['keypage']).'.html'?>"> <span class="navSubTxt"><?= $getParentID0['catName'] ?></span> </a>
                                                    </li>
                                                    <?php endforeach ?>
                                                </ul>
												<div class="submenuWrapper">
													<?php foreach($getParentID0s as $getParentID0one): ?>
                                                    <div id="navLayer_<?= $getParentID0one['catID'] ?>" class="navLayer" style="display: none;">
                                                        <div class="navLayerSub clearfix">
                                                            <?php
                                                            $lv2 = $this->category_model->getAllCateMenuParent($getParentID0one['catID']); 
                                                            while ($wlv2 = mysql_fetch_array($lv2)){ ?> 
                                                                <div class="navCol navCol1">
                                                                    <div class="nav-title">
                                                                        <a href="<?= base_url($wlv2['keypage'].'-pd.html')?>"><?= $wlv2['catName'] ?></a>
                                                                    </div>
                                                                    <?php
                                                                        $lv3 = $this->category_model->getAllCateMenuParent($wlv2['catID']);
                                                                        while ($wlv3 = mysql_fetch_array($lv3)){ 
                                                                    ?>
                                                                    <div class="nav-linklist">
                                                                        <a href="<?= base_url($wlv2['keypage'].'-pd-pr'.$wlv3['catID'].'-th0-tt0-od0').'.html'?>" class="bsncLink"><?= $wlv3['catName'] ?></a>
                                                                    </div>
                                                                    <div class="brand-list"></div>
                                                                    <?php } ?>
                                                                   
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="catImg catImg-inside" style="max-height: 343px;">
                                                            <!-- Image in .png format -->
                                                            <a href="#"> <span class="" data-src="<?php echo base_url().$getParentID0one['anhngoai']?>">
                                                            <img src="<?php echo base_url().$getParentID0one['anhngoai']?>"></span> </a>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                    <?php endforeach ?>
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>


						</div>
						<div class="search-home">
                        	<form action="<?= base_url('search') ?>" id="search-box" method="POST">
                            	<div class="search-wapper">
                                	<input type="text" class="text-search" name="keysearch" placeholder="nhập từ khóa cần tìm" />
                                        <button type="submit" class="search-btn">TÌM KIẾM</button>
                                </div>
                            </form>
                        </div>
						<div class="like-face">
				            <div id="fb-root"></div>
				            <script>(function(d, s, id) {
				              var js, fjs = d.getElementsByTagName(s)[0];
				              if (d.getElementById(id)) return;
				              js = d.createElement(s); js.id = id;
				              js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=523120354477414&version=v2.0";
				              fjs.parentNode.insertBefore(js, fjs);
				            }(document, 'script', 'facebook-jssdk'));</script>
				            <div class="fb-like" data-href="https://www.facebook.com/Vuabanle.vn" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
				        </div>
					</div>
				</div>
				<div class="clear-float"></div>
				<!--------end#nav-top---->
			</div>
		</div>
		<!-------end#header--->

		<div id="content">
			<div class="content-top">
				<div class="wrap"></div>
			</div>
			<!------end.content-top--->
			 <?php if ($getDetail->imageBanner1=="")
                { }else{ ?>
                <div class="product-advertising">
                    <div class="wrap">
                        <div class="advertising">
                            <div class="module-advertis">
                                <a href="" title=""><img src="<?php echo $getDetail->imageBanner1;?>"  width="980px " height="170px" title="" alt=""/></a>
                            </div>

                        </div>
                    </div>

                </div>
             <?php }?>
			<!-----end.product-advertisingt--->
			<div class="bread">
                    <div class="wrap">
                        <div class="breadcrumb1">
                            <a href="<?= base_url() ?>">Trang chủ</a> &raquo; 
                            <a href="<?= @$categorytrees[1][0]['keypage'].'.html' ?>">
                            <?= @$categorytrees[1][0]['catName'].''; ?>
                            </a> &raquo; 
                           <a href=""><?= @$categorytrees[0][0]['catName'] ?></a>
					</div>
				</div>
            </div>
			<!-----end.bread--->
			<div class="content-main">
				<div class="wrap">
					<div class="left-content">

						<ul class="fct-list">
                                <li class="fct category-segment fct-box-category">
                                    <?php
                                    $getUrl = $_SERVER['REDIRECT_QUERY_STRING'];
                                    $strGetUrl = substr($getUrl, 1);
                                    
                                    $explodeUrl = explode("-pd-", $strGetUrl);
                                    if(isset($explodeUrl[1]) || isset($_GET['price_from']))
                                    {
                                        @$explodeUrlSearch = explode("-", $explodeUrl[1]);
                                        echo "<pre>";
                                        // var_dump($explodeUrlSearch);
                                        echo "</pre>";
                                        @$CateParent = filter_var($explodeUrlSearch[0], FILTER_SANITIZE_NUMBER_INT);
                                        @$Catebrand = filter_var($explodeUrlSearch[1], FILTER_SANITIZE_NUMBER_INT);
                                        @$CateTt = filter_var($explodeUrlSearch[2], FILTER_SANITIZE_NUMBER_INT);
                                        @$CateOrder = filter_var($explodeUrlSearch[3], FILTER_SANITIZE_NUMBER_INT);
                                    ?>
                                    <div class="categoryMenu filter-cancel box-bdr box-bgcolor fsm">
                                        <div class="h4 fct-hd">
                                            Lọc bởi
                                        </div>
                                        <div class="fct-list fct-list-browse_by">
                                            <div>
                                                <?php if(isset($_GET['price_from']) && isset($_GET['price_to']) ){ ?>
                                                <a class="fct-cancel" href="<?= base_url($uriproduct).'-pd-pr0'?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?>"> <span class="fct-cancel__type">Giá sp:</span>
                                                     <?php echo Utility_model::price_format($_GET['price_from']).'VNĐ<br/>'.Utility_model::price_format($_GET['price_to']).'VNĐ' ?>
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                                <?php if(isset($CateParent) && $CateParent != 0 ){ ?>
                                                <a class="fct-cancel" href="<?= base_url($uriproduct).'-pd-pr0'?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?><?php if(isset($_GET['price_from'])){ echo "?price_from=".$_GET['price_from']."&price_to=".$_GET['price_to'];} ?>"> <span class="fct-cancel__type">Loại sp:</span>
                                                     <?php foreach($getCategoryUsingParent as $getCategoryUsingParentnotice){
                                                        if($CateParent == $getCategoryUsingParentnotice['catID'] )
                                                        {
                                                            echo $getCategoryUsingParentnotice['catName'];
                                                        } 
                                                     }?>
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                                
                                                <?php if(isset($Catebrand) && $Catebrand != 0 ){ ?>
                                                <a class="fct-cancel" href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?><?php if(isset($_GET['price_from'])){ echo "?price_from=".$_GET['price_from']."&price_to=".$_GET['price_to'];} ?>"> <span class="fct-cancel__type">Thương hiệu sp:</span>
                                                     <?php
                                                        $getOneBrand = Brand_model::getOneStatic($Catebrand);
                                                        while($getonebrands = mysql_fetch_array($getOneBrand)){
                                                            echo $getonebrands['catName'];
                                                        }
                                                        /*
                                                        foreach($getAllBrands as $getAllBrand){
                                                            if($Catebrand == $getAllBrand['catID'] )
                                                            {
                                                               echo $getAllBrand['catName'];
                                                            }
                                                       */ 
                                                     ?>
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                                <?php if(isset($CateTt) && $CateTt != 0 ){ ?>
                                                <a class="fct-cancel" href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt0-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?><?php if(isset($_GET['price_from'])){ echo "?price_from=".$_GET['price_from']."&price_to=".$_GET['price_to'];} ?>"> <span class="fct-cancel__type">Hàng:</span>
                                                     <?php 
                                                        if($CateTt == 1)
                                                        {
                                                            echo "Sản phẩm mới";
                                                        }else {
                                                            echo "Sản phẩm HOT";
                                                        } 
                                                     ?>
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                                <?php if(isset($CateOrder) && $CateOrder != 0 ){ ?>
                                                <a class="fct-cancel" href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od0<?php if(isset($_GET['price_from'])){ echo "?price_from=".$_GET['price_from']."&price_to=".$_GET['price_to'];} ?>"> <span class="fct-cancel__type">Giá:</span>
                                                     <?php 
                                                        if($CateOrder == 1)
                                                        {
                                                            echo "Giá cao đến thấp";
                                                        }else {
                                                            echo "Giá thấp đến cao";
                                                        } 
                                                     ?>
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                            </div>
                                            <a class="rfloat fct__cancell-all-link" href="<?php echo base_url($uriproduct).'-pd' ?>">Xoá tất cả</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                
                                
                                    <div class="h4 fct-hd">
                                        Tất cả sản phẩm  (<?= $countAllProductUsingCate->countDroduct ?>)
                                    </div>
                                    <div style="" class="fct-bd">
                                        <ul class="cnv fct-category sel-catalog-category">
                                            <li class="cnv-level-1 childSelected cnv-levelChilds" >
                                                <ul class="cnv-subCat-1 cnv-subCat-1_no-segment">
                                                    <?php foreach($getCategoryUsingParent as $getCategoryUsingParent): ?>
                                                    <li class="cnv-level-2 cnv-levelChilds" >
<a href="<?= base_url($uriproduct).'-pd-pr'.$getCategoryUsingParent['catID'] ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;}?><?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; } ?>" class="cnvicon_i-arrowRightDark"><span class="cssicon i-arrowRightDark"><?= $getCategoryUsingParent['catName']?></span><span class="cnv-items"> (<?= Products_model::CountProductUsingCate($getCategoryUsingParent['catID'])?>)</span></a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                </li>
                                <li class="fct brands fct-box-brand">
                                    <div class="h4 fct-hd">
                                        Thương hiệu
                                    </div>
                                    <div style="" class="fct-bd">

                                        <div id="fct-brand-search" class="box fct-search-box">
                                            <input class="ui-inputText fss" placeholder="Tìm theo thương hiệu ..." type="text">
                                            <span class="icon i-search icon-filter-search"></span>
                                        </div>
                                        <?php
                                        if($getAllBrandsCate != null AND @$getAllBrandsCate != ""){?>
                                            <ul style="height: 84px;" id="facet_brand" class="cnv fct-scroll brands">
                                                    <?php foreach($getAllBrandsCate as $getAllBrandss): ?>
                                                    <?php if($getAllBrandss){ ?>
                                                    <li class="cnv-level-1" id="filter__brand--1">
                                                        <div class="cnv-level-1__item">
                                                            <!--<input value="" class="cnv-level-1__checkbox " type="checkbox">-->
                                                            <?php @$countBrand = Products_model::CountProductUsingBrand($getAllBrandss[0]['catID']); ?>
                                                            <?php if($countBrand || $countBrand > 0){ ?>
                                                               <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php echo '-th'.$getAllBrandss[0]['catID']; ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?><?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; } ?>" class="cnv-level-1__item-link"><?php echo $getAllBrandss[0]['catName'] ?><span class="cnv-items">(<?= Products_model::CountProductUsingBrand($getAllBrandss[0]['catID']) ?>)</span></a>    
                                                            <?php }else { ?>
                                                                <a class="cnv-level-1__item-link"><?php echo $getAllBrandss[0]['catName'] ?><span class="cnv-items"></span></a>
                                                            <?php }  ?>
                                                            
                                                        </div>
                                                    </li>
                                                    <?php }else { ?>
                                                    	  <!-- <li class="cnv-level-1" id="filter__brand--1">
		                                                    <div class="cnv-level-1__item">
		                                                        <a class="cnv-level-1__item-link">Chưa có thương hiệu<span class="cnv-items"></span></a>
		                                                    </div>
		                                                </li> -->
                                                    <?php } ?>
                                                    <?php endforeach; ?>
                                              
                                                
                                            </ul>

                                        <?php }else { ?>
                                        	
                                            <ul style="height: 84px;" id="facet_brand" class="cnv fct-scroll brands">
                                            <?php if($getAllBrands){ ?>
                                                <?php foreach($getAllBrands as $getAllBrand): ?>
                                                <li class="cnv-level-1" id="filter__brand--1">
                                                    <div class="cnv-level-1__item">
                                                        <!--<input value="" class="cnv-level-1__checkbox " type="checkbox">-->
                                                        <?php $countBrand = Products_model::CountProductUsingBrand($getAllBrand['catID']); ?>
                                                        <?php if($countBrand || $countBrand > 0){ ?>
                                                           <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php echo '-th'.$getAllBrand['catID']; ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?><?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; } ?>" class="cnv-level-1__item-link"><?php echo $getAllBrand['catName'] ?><span class="cnv-items">(<?= Products_model::CountProductUsingBrand($getAllBrand['catID']) ?>)</span></a>    
                                                        <?php }else { ?>
                                                            <a class="cnv-level-1__item-link"><?php echo $getAllBrand['catName'] ?><span class="cnv-items"></span></a>
                                                        <?php }  ?>
                                                        
                                                    </div>
                                                </li>
                                                <?php endforeach; ?>
                                            <?php }else { ?>
                                                 <li class="cnv-level-1" id="filter__brand--1">
                                                    <div class="cnv-level-1__item">
                                                        <a class="cnv-level-1__item-link">Chưa có thương hiệu<span class="cnv-items"></span></a>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                            
                                        </ul>
                                        <?php } ?>
                                        
                                    </div>

                                </li>
                                <?php
                                function getUrl() {
                                  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
                                  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
                                  $url .= $_SERVER["REQUEST_URI"];
                                  return $url;
                                }
                                
                                ?>
                                <div class="h4 fct-hd">
                                    Giá
                                </div>
                                <div class="fct-bd" style="">
                                    <div class="priceRangeSliderBox" id="facet-facet_price">
                                        <!-- Range Slider -->
                                        <div class="slider-range noUi-target noUi-ltr noUi-horizontal noUi-background" data-rangestep="5"></div>
                                        <form class="priceRangeForm">
                                            <div class="sliderInput clearfix">
                                                <div class="priceRangeFrom ">
                                                    <input class="ui-inputText fss" data-minpricerange="<?= $getMinMaxPrice->giathap ?>" data-minprice="<?= $getMinMaxPrice->giathap ?>" value="<?= $getMinMaxPrice->giathap ?>" name="price_from" maxlength="8" type="text">
                                                    <span>VND</span>
                                                </div>
                                                <div class="priceSeperate">
                                                    -
                                                </div>
                                                <div class="priceRangeTo">
                                                    <input class="ui-inputText fss" data-maxpricerange="<?= $getMinMaxPrice->giacao ?>" data-maxprice="<?= $getMinMaxPrice->giacao ?>" value="<?= $getMinMaxPrice->giacao ?>" name="price_to" maxlength="8" type="text">
                                                    <span>VND</span>
                                                </div>
                                                <input data-pricerangelink="" class="catalogPriceFilterSubmit1 icon icon-filter-submit" value="»" type="submit" />

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <li class="fct rating fct-box-rating">
                                    <div class="h4 fct-hd">

                                        Đánh giá (Tất cả)
                                    </div>
                                    <div style="" class="fct-bd">
                                        <div class="rating-slider">
                                            <div class="rating-slider-vertical noUi-target noUi-rtl noUi-vertical " id="rating-vertical"></div>
                                        </div>

                                        <div class="rating-detail">
                                            <ul class="cnv fct-scroll brands" id="facet_rating">
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-1"></span>
                                                </li>
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-2 "></span>
                                                </li>
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-3 "></span>
                                                </li>
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-4 "></span>
                                                </li>
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-5"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="catalogPriceFilterSubmit"  href="danhmuccon.html"> </a>

                                    </div>

                                </li>
                            </ul>
					</div>
					<!-----endleft-content--->
					<div class="right-content">
						<div class="box  productTeaserBox">
							<!-- Sitemap -->
  <script src="<?= base_url('public/font-end')?>/js/category.js"></script>
							<!-- Filter box -->
							<div class="product-filter-wrapper" style="margin-bottom: 0px;">
								<div class="title">
									<span>Tìm theo</span>
								</div>
								<!-- Price Range -->
								<div class="filter">
                                        <div class="filter-name"> <a href="javascript:;" title="">Hàng mới về</a> </div>
                                        <div class="filter-list-wrapper ">
                                            <ul class="filter-list nolist ">
                                                <li class="checked">
                                                    <a href="javascript:void(0)">Tất cả</a>
                                                </li>
                                                <li>
                                                     <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt1-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?><?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to'];}?>">Sản phẩm Mới</span></a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt2-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?><?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to'];}?>">Sản phẩm hot </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
								<!-- Order -->
								<div class="filter selected orderby">
                                        <div class="filter-name ">
                                            <?php if(isset($CateOrder) && $CateOrder == 1){ ?>
                                                <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od1">Giá thấp đến cao</span></a>
                                            <?php }else { ?>
                                                <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od2">Giá cao đến thấp</span></a>
                                            <?php }
                                            ?>
                                        </div>
                                        <div class="filter-list-wrapper">
                                            <ul class="filter-list nolist ">
                                                <li <?php if(isset($CateOrder) && $CateOrder == 1){ echo 'class="checked"';} ?> >
                                                    <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od1<?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; } ?>">Giá cao đến thấp</span></a>
                                                </li>
                                                <li <?php if(isset($CateOrder) && $CateOrder == 2){ echo 'class="checked"';} ?> >
                                                    <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od2<?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; }?>">Giá thấp đến cao</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
								<script type="text/javascript">
				                    $('#ulcatmenu > li > a').each(function(){
				                        var tmp = $(this).attr('href').replace('/','');
				                        if(tmp.indexOf(caturl) >= 0){
				                            $(this).addClass('active');
				                            return;
				                        }
				                    });
				                </script>
							</div>
						</div>
						<div class="box productTeaserBox prd-row" id="catalog-products-list" >
                                <div class="header-title">
                                    <h1 class="lfloat h3"><span class="arrow-icon"></span>&nbsp;&nbsp;<?= $getDetail->catName; ?></h1>
                                </div>
                                <ul class="itemlist" >
                                    <?php foreach($products as $product):?>                                        
                                    <li>
                                        <div class="item view-first1">
                                            <a href="<?= base_url().$product['seo_name'].'.html'; ?>">
                                            <span>
                                            <?php if($product['anhthume'] != ''){?>
                                            <img src="<?= base_url().$product['anhthume']?>" alt=""/>
                                            <?php }else { ?>
                                            <img src="<?= base_url().$product['productImage']?>" alt=""/>
                                            <?php } ?>
                                            </span>
                                            <div class="item-prodinfo">
                                                <?php if($product['giamgia'] != NULL || $product['giamgia'] != ""): ?>
                                                <div class="sb-gdv-disc">
                                                    <div class="sb-gdv-disc__content">
                                                        <?= $product['giamgia'] ?>%
                                                    </div>
                                                </div>
                                                <?php endif ?>
                                                <div class="item-title">
                                                    <?=  $product['productName'] ?>
                                                </div>
                                                <div class="item-stockhim">
                                                    <?php if($product['tinhtranghang'] == 1 ){ echo "Còn hàng";}elseif($product['tinhtranghang'] == 2){ echo "Hết hàng";}else { echo "Sắp có hàng"; } ?>
                                                </div>
                                                <?php if($product['giamgia'] != NULL || $product['giamgia'] != "" ){ ?>
                                                    <div class="item-core">
                                                        <?= Utility_model::price_format($product['gia']); ?> VNĐ
                                                    </div>
                                                    <div class="item-price">
                                                        <?php
                                                        if(isset($product['giagiam'])){
                                                            echo Utility_model::price_format($product['giagiam']);
                                                        }else {
                                                            echo Utility_model::price_format($product['gia']);
                                                        } 
                                                        ?>
                                                        VNĐ
                                                    </div>
                                                <?php }else{ ?>
                                                    <div class="item-price">
                                                        <?= Utility_model::price_format($product['gia']); ?> VNĐ
                                                    </div>
                                                <?php }?>
                                            </div> </a>
                                            <div class="item-hover mask ">
                                                   <a class="open-pop-up-2"  href="#pop-up-2" onclick="mua(<?= $product['productID']; ?>,<?= $product['gia']; ?>, '<?= $product['productName']; ?>' )">mua ngay </a>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <?php endforeach; ?>    

                                </ul>
                                <!------ListSanPham---->

                                <div class="l-cell vMid txtRight pgn-pagingWrapper">
                                    <ul data-pagination-controls="true" class="ui-listHorizontal pgn">
                                        <li class="ui-listItem">
                                            <?= $paging  ?>
                                        </li>
                                    </ul>
                                </div>
                                <!----end.Phantrang---->
                            </div>
						<!--------end.productTeaserBox---->
						<?php if ($getDetail->content==""){}else{
                                    ?>
                            <div class="content-seo">
                                <?php echo $getDetail->content;}?>
                            </div>
					</div>
					<!-----end.right---->


				</div>

			</div>
			<!----------endContent-main---->

			<div class="product-Lienqua" style="margin-top:10px;">

                    <div class="wrap">
                        <div class="box productTeaserBox prd-row">
                            <div class="header-title2">
                                <h2 class="lfloat h3"> <span class="arrow-icon"></span>&nbsp;&nbsp;Sản phẩm ngẫu nhiên </h2>
                            </div>
                            <ul class="itemlist">
                                <?php foreach ($listProductRandom as $listProductRandoms):?>
                                <li>
                                    <div class="item view-first1">
                                        <a href="<?= base_url().$listProductRandoms['seo_name'].'.html'; ?>"> 
                                        <span>
                                        <?php if($listProductRandoms['anhthume'] != ''){ ?>
                                            <img width="200px " height="135px" src="<?= base_url().$listProductRandoms['anhthume']?>" alt="<?= $listProductRandoms['productName'] ?>" alt="" />
                                        <?php }else { ?>
                                            <img width="200px " height="135px" src="<?= base_url().$listProductRandoms['productImage']?>" alt="<?= $listProductRandoms['productName'] ?>" alt="" />    
                                        <?php }?>
                                        </span>
                                            <div class="item-prodinfo">
                                                <?php
                                                if($listProductRandoms['giamgia'] == "" || $listProductRandoms['giamgia'] == null){
                                                    
                                                }else { ?>
                                                    <div class="sb-gdv-disc">
                                                        <div class="sb-gdv-disc__content">-<?= $listProductRandoms['giamgia'] ?>%</div>
                                                    </div>
                                                <?php } ?>
                                                
                                                <div class="item-title"><?= $listProductRandoms['productName'] ?></div>
                                                <div class="item-stockhim"><?php if($listProductRandoms['tinhtranghang'] == 1 ){ echo "Còn hàng";}elseif($listProductRandoms['tinhtranghang'] == 2){ echo "Hết hàng";}else { echo "Sắp có hàng"; } ?></div>
                                                <?php
                                                if($listProductRandoms['giamgia'] == "" || $listProductRandoms['giamgia'] == null || $listProductRandoms['giamgia'] == 0){ ?>
                                                    <div class="item-core"> </div>
                                                    <div class="item-price"><?= Utility_model::price_format($listProductRandoms['gia']); ?>  VNĐ</div>
                                                <?php }else { ?>
                                                    <div class="item-core"><?= Utility_model::price_format($listProductRandoms['gia']); ?> VNĐ</div>
                                                    <div class="item-price"><?= Utility_model::price_format($listProductRandoms['giagiam']); ?>  VNĐ</div>
                                                <?php } ?>
                                                
                                            </div>
                                        </a>
                                         <div class="item-hover mask ">
                                                   <a class="open-pop-up-2"  href="#pop-up-2" onclick="mua(<?= $listProductRandoms['productID']; ?>,<?= $listProductRandoms['gia']; ?>, '<?= $listProductRandoms['productName']; ?>' )">mua ngay </a>
                                            </div>
                                       
                                    </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                            <!------ListSanPham---->

                        </div>
                        <!--------end.productTeaserBox---->
                    </div>

                </div>
			<!----endProductLienquan---->
		</div>
		<!-----end#content----->
		<?php echo $this->load->view('footer_view'); ?>
