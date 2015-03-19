<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['backend/([a-zA-Z_-]+)/(:any)'] = 'backend/$1/$2';
$route['backend/([a-zA-Z_-]+)'] = 'backend/$1';
$route['backend'] = 'backend';



$route['404_override'] = '';
$route['default_controller'] = "Home";