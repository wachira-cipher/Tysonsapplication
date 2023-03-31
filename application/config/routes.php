<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/update']='posts/update';
$route['posts/create']='posts/create';
$route['posts/(:any)']='posts/view/$1';
$route['posts']='posts/index';
$route['default_controller'] = 'pages/views';
$route['(:any)']='pages/views/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
