<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// vuabanlev4
$route['qlvuabanle'] = "dashboard/dashboard/index/$1";
$route['qlvuabanle/([a-zA-Z_-]+)'] = "dashboard/$1";

//http://vuabanle.dev/qlvuabanle/ad_products/index
$route['qlvuabanle/([a-zA-Z_-]+)/(:any)'] = "dashboard/$1/$2";



/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/



// post home 



// saveuserajax
$route['register/saveAjax'] = "register/saveAjax/$1";

// login subForm
$route['register/saveAjax1'] = "register/saveAjax1/$1";


// ============================ ADMIN ======================================== //
$route['admincp'] = "admincp/admincp/index/$1";
$route['admincp/analytics'] = "admincp/admincp/analytic/$1";







// Danh muc
$route['admincp/category'] = "admincp/category/index/$1";
$route['admincp/category/(:num)'] = "admincp/category/index/$1";
$route['admincp/category/add'] = "admincp/category/add/index/$1";
$route['admincp/category/cat-(:num)'] = "admincp/category/index/cid/$1";
$route['admincp/category/edit/(:num)'] = "admincp/category/edit/cid/$1";
$route['admincp/category/delete'] = "admincp/category/delete/$1";

/*
$route['admincp/myhome'] = "admincp/myhome/index/$1";
$route['admincp/myhome/edit/(:num)'] = "admincp/myhome/edit/cid/$1";
$route['admincp/myhome/add'] = "admincp/myhome/add/index/$1";
*/
$route['admincp/homev3'] = "admincp/homev3/index/$1";
$route['admincp/homev3/add'] = "admincp/homev3/add/index/$1";
$route['admincp/homev3/edit/(:num)'] = "admincp/homev3/edit/cid/$1";
// trang chu
$route['admincp/athome'] = "admincp/athome/index/$1";
$route['admincp/athome/edit/(:num)'] = "admincp/athome/edit/cid/$1";
$route['admincp/athome/add'] = "admincp/athome/add/index/$1";
$route['admincp/athome/edit/(:num)'] = "admincp/athome/edit/cid/$1";


/*
$route['admincp/category/cat-(:num)'] = "admincp/category/index/cid/$1";
$route['admincp/category/edit/(:num)'] = "admincp/category/edit/cid/$1";
$route['admincp/category/delete'] = "admincp/category/delete/$1";
*/


// san pham
$route['admincp/products'] = "admincp/products/index/$1";
$route['admincp/products/(:num)'] = "admincp/products/index/$1";
$route['admincp/products/add'] = "admincp/products/add/index/$1";
$route['admincp/products/edit/(:num)'] = "admincp/products/edit/pid/$1";
$route['admincp/products/delete'] = "admincp/products/delete/$1";

	// 	check ajax index 
	$route['admincp/products/ischeck'] = "admincp/products/ischeck/$1";


// Thuong hieu
$route['admincp/brand'] = "admincp/brand/index/$1";
$route['admincp/brand/(:num)'] = "admincp/brand/index/$1";
$route['admincp/brand/add'] = "admincp/brand/add/index/$1";
$route['admincp/brand/edit/(:num)'] = "admincp/brand/edit/cid/$1";
$route['admincp/brand/delete'] = "admincp/brand/delete/$1";

// Gio hang
$route['admincp/cart'] = "admincp/cart/index/$1";
$route['admincp/cart/(:num)'] = "admincp/cart/index/$1";
$route['admincp/cart/view/(:num)'] = "admincp/cart/view/cid/$1";
$route['admincp/cart/delete'] = "admincp/cart/delete/$1";

// Comment
$route['admincp/comment'] = "admincp/comment/index/$1";
$route['admincp/comment/add'] = "admincp/comment/add/index/$1";
$route['admincp/comment/(:num)'] = "admincp/comment/index/$1";
$route['admincp/comment/edit/(:num)'] = "admincp/comment/edit/cid/$1";
$route['admincp/comment/delete'] = "admincp/comment/delete/$1";


// Content - Quan ly bai viet
$route['admincp/content'] = "admincp/content/index/$1";
$route['admincp/content/(:num)'] = "admincp/content/index/$1";
$route['admincp/content/add'] = "admincp/content/add/index/$1";
$route['admincp/content/edit/(:num)'] = "admincp/content/edit/cid/$1";
$route['admincp/content/delete'] = "admincp/content/delete/$1";


// Hỏi đáp
$route['admincp/faqs'] = "admincp/faqs/index/$1";
$route['admincp/faqs/(:num)'] = "admincp/faqs/index/$1";
$route['admincp/faqs/add'] = "admincp/faqs/add/index/$1";
$route['admincp/faqs/edit/(:num)'] = "admincp/faqs/edit/cid/$1";
$route['admincp/faqs/delete'] = "admincp/faqs/delete/$1";

// Tin tức
$route['admincp/news'] = "admincp/news/index/$1";
$route['admincp/news/(:num)'] = "admincp/news/index/$1";
$route['admincp/news/add'] = "admincp/news/add/index/$1";
$route['admincp/news/edit/(:num)'] = "admincp/news/edit/cid/$1";
$route['admincp/news/delete'] = "admincp/news/delete/$1";

// Dịch vụ
$route['admincp/services'] = "admincp/services/index/$1";
$route['admincp/services/(:num)'] = "admincp/services/index/$1";
$route['admincp/services/add'] = "admincp/services/add/index/$1";
$route['admincp/services/edit/(:num)'] = "admincp/services/edit/cid/$1";
$route['admincp/services/delete'] = "admincp/services/delete/$1";

// Work
$route['admincp/works'] = "admincp/works/index/$1";
$route['admincp/works/(:num)'] = "admincp/works/index/$1";
$route['admincp/works/add'] = "admincp/works/add/index/$1";
$route['admincp/works/edit/(:num)'] = "admincp/works/edit/cid/$1";
$route['admincp/works/delete'] = "admincp/works/delete/$1";

//slider
$route['admincp/gallery'] = "admincp/gallery/index/$1";

//slider
$route['admincp/config'] = "admincp/config/index/$1";
$route['admincp/config/edit/(:num)'] = "admincp/config/index/edit/cid/$1";


// login-logout admin
$route['admin'] = "admincp/ad_login/index/$1";
$route['admin/dang-nhap'] = 'admincp/ad_login/index/$1';
$route['admin/dang-xuat'] = 'admincp/ad_login/logout/$1';
$route['admin/kiem-tra'] = 'admincp/ad_login/VerifyLogin/index/$1';
$route['admin/logout'] = 'admincp/ad_login/logout/index/$1';

// Quản lý user
$route['admincp/user'] = "admincp/user/index/$1";
$route['admincp/user/(:num)'] = "admincp/user/index/$1";
$route['admincp/user/add'] = "admincp/user/add/index/$1";
$route['admincp/user/edit/(:num)'] = "admincp/user/edit/cid/$1";
$route['admincp/user/delete'] = "admincp/user/delete/$1";

// Quản lý thành viên
$route['admincp/member'] = "admincp/member/index/$1";
$route['admincp/member/(:num)'] = "admincp/member/index/$1";
$route['admincp/member/add'] = "admincp/member/add/index/$1";
$route['admincp/member/edit/(:num)'] = "admincp/member/edit/cid/$1";
$route['admincp/member/delete'] = "admincp/member/delete/$1";

// lien he
$route['admincp/contact'] = "admincp/contact/index/$1";
$route['admincp/contact/(:num)'] = "admincp/contact/index/$1";
$route['admincp/contact/edit/(:num)'] = "admincp/contact/edit/cid/$1";
$route['admincp/contact/delete'] = "admincp/contact/delete/$1";

// lien he
$route['admincp/padding'] = "admincp/padding/index/$1";
$route['admincp/padding/add'] = "admincp/padding/add/index/$1";
$route['admincp/padding/(:num)'] = "admincp/padding/index/$1";
$route['admincp/padding/edit/(:num)'] = "admincp/padding/edit/id/$1";
$route['admincp/padding/delete'] = "admincp/padding/delete/$1";


// khuyen mai
$route['admincp/promotion'] = "admincp/promotion/index/$1";
$route['admincp/promotion/add'] = "admincp/promotion/add/index/$1";
$route['admincp/promotion/(:num)'] = "admincp/promotion/index/$1";
$route['admincp/promotion/edit/(:num)'] = "admincp/promotion/edit/id/$1";
$route['admincp/promotion/delete'] = "admincp/promotion/delete/$1";

// quan ly gia
$route['admincp/price'] = "admincp/price/index/$1";
$route['admincp/price/(:num)'] = "admincp/price/index/$1";
$route['admincp/price/add'] = "admincp/price/add/index/$1";
$route['admincp/price/edit/(:num)'] = "admincp/price/edit/cid/$1";
$route['admincp/price/delete'] = "admincp/price/delete/$1";

// quan ly ma code
// quan ly gia
$route['admincp/code'] = "admincp/code/index/$1";
$route['admincp/price/(:num)'] = "admincp/price/index/$1";
$route['admincp/price/add'] = "admincp/price/add/index/$1";
$route['admincp/price/edit/(:num)'] = "admincp/price/edit/cid/$1";
$route['admincp/price/delete'] = "admincp/price/delete/$1";


// =============================FOOTER============================== //
$route['danh-cho-nhom-mua'] = "articles/index/$1";
$route['danh-cho-nha-cung-cap'] = "articles/index/$1";
$route['ve-vuabanle'] = "articles/index/$1";
$route['khuyen-mai'] = "articles/index/$1";
$route['cam-ket-bao-mat-su-dung-thong-tin'] = "articles/index/$1";
$route['thanh-toan-mua-hang-tai-vuabanle'] = "articles/index/$1";
$route['huong-dan-mua-hang'] = "articles/index/$1";
$route['chinh-sach-bao-hanh'] = "articles/index/$1";

$route['tuyen-dung'] = "articles/tuyendung/$1";
$route['tuyen-dung/(:num)'] = "articles/tuyendung/$1";
$route['tuyen-dung/(:any)'] = "articles/tuyendungview/$1";

$route['tin-tuc'] = "articles/tintuc/$1";
$route['tin-tuc/(:num)'] = "articles/tintuc/$1";
$route['tin-tuc/(:any)'] = "articles/tintucview/$1";





// ============================ HOME ======================================== //




// login register member 
$route['dang-nhap/kiem-tra'] = "login/check_login/index/$1";
$route['dang-nhap'] = "login/index/$1";
$route['dang-ky'] = "register/index/$1";
$route['dang-ky/kiem-tra'] = "register/check_register/index/$1";
$route['dang-xuat'] = "login/logout/index/$1";

//lien he
$route['lien-he'] = "contact/index/$1";

// Quản lý tài khoản ,dia chi,don hang
$route['quan-ly-tai-khoan'] = "member/index/$1";
$route['sua-thong-tin-ca-nhan'] = "member/edit/index/$1";
$route['thay-doi-mat-khau'] = "member/change_password/index/$1";
$route['thay-doi-email'] = "member/change_email/index/$1";
$route['quan-ly-dia-chi'] = "member/manager_address/index/$1";
$route['them-dia-chi'] = "member/add_address/index/$1";

$route['don-hang'] = "member/cart/index/$1";
$route['phuong-thuc-thanh-toan'] = "member/payment_methods/index/$1";
$route['phieu-giam-gia'] = "member/voucher/index/$1";


// chinh sach
$route['chinh-sach/(:any)'] = "home/policy/index/$1";

$route['home/menu'] = "home/menu/index/$1";

// checkout
$route['checkout'] = "checkout/index/$1";
$route['checkout/step1'] = "checkout/step1/$1";
$route['checkout/step2'] = "checkout/step2/$1";
$route['checkout/step3'] = "checkout/step3/$1";
$route['checkout/loadallcod'] = "checkout/loadallcod/$1";



$route['search-pd-pr(:num)-th(:num)-tt(:num)-od(:num)'] = "search/search/$1";
$route['search-pd-pr(:num)-th(:num)-tt(:num)-od(:num)/(:num)'] = "search/search/$1";

$route['(:any)-pd'] = "products/index/$1";
$route['(:any)-pd/(:num)'] = "products/index/$1";

$route['(:any)-pd-pr(:num)-th(:num)-tt(:num)-od(:num)'] = "products/search/$1";
$route['(:any)-pd-pr(:num)-th(:num)-tt(:num)-od(:num)/(:num)'] = "products/search/$1";


$route['search/hang-moi-ve'] = "search/index/$1";
$route['search/ban-chay'] = "search/index/$1";
$route['search/hang-hot'] = "search/index/$1";

$route['search/thuonghieu/(:num)'] = "search/index/$1";
$route['search/thuonghieu/(:num)/(:num)'] = "search/thuonghieu/$1";

$route['search'] = "search/index/$1";
$route['search/(:num)'] = "search/index/$1";

$route['(:any)-qc'] = "home/padding/index/$1";
$route['(:any)-qc/(:num)'] = "home/padding/index/$1";

$route['cart'] = "cart/index/$1";
$route['cart/add'] = "cart/add/$1";
$route['cart/update'] = "cart/updated/$1";
$route['cart/delete'] = "cart/delete/$1";
$route['cart/step1'] = "cart/step1/$1";

$route['(:any)'] = "home/uri";
$route['users'] = "users/index/$1";

$route['home/email'] = "home/Email/$1";

// check-email-database
$route['home/checkEmail'] = "home/checkEmail/$1";
$route['home/checkUsername'] = "home/checkUsername/$1";

// check-login
$route['home/checkUser'] = "home/checkUser/$1";
$route['home/checkPass'] = "home/checkPass/$1";





// gửi nhận xet
$route['gui-nhan-xet'] = "home/comment/index/$1";
$route['khuyen-mai-lon'] = "home/bigsale/index/$1";

// sale 2
$route['khuyen-mai-dac-biet'] = "bigsale/index/$1";

// sale3
$route['giang-sinh-am-ap'] = "bigsale/noel/$1";
// sale4
$route['ron-rang-sam-tet'] = "bigsale/newyear/$1";






//$route['default_controller'] = "Home";
// $route['default_controller'] = "welcome";
$route['404_override'] = '';

$route['default_controller'] = "Home";











/* End of file routes.php */
/* Location: ./application/config/routes.php */