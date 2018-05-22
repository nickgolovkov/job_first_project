<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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

$route['default_controller'] = "welcome/show/index";
$route['404_override'] = '';
$route['index'] = 'welcome/show/index';
$route['contakt'] = 'welcome/show/contakt';
$route['welcome/contakt'] = 'welcome/show/contakt';
$route['welcome/portfolio'] = 'welcome/show/portfolio';
$route['portfolio'] = 'welcome/show/portfolio';
$route['welcome/shop'] = 'welcome/show/shop';
$route['shop'] = 'welcome/show/shop';
$route['welcome/shop_pos'] = 'welcome/show/shop_pos';
$route['shop_pos'] = 'welcome/show/shop_pos';
$route['welcome/index'] = 'welcome/show/index';
$route['welcome/partners'] = 'welcome/show/partners';
$route['partners'] = 'welcome/show/partners';
$route['welcome/price'] = 'welcome/show/price';
$route['price'] = 'welcome/show/price';
$route['welcome/shop_diz'] = 'welcome/show/shop_diz';
$route['shop_diz'] = 'welcome/show/shop_diz';
$route['welcome/shop_reklama'] = 'welcome/show/shop_reklama';
$route['shop_reklama'] = 'welcome/show/shop_reklama';
$route['welcome/shop_parazdnik'] = 'welcome/show/shop_parazdnik';
$route['shop_parazdnik'] = 'welcome/show/shop_parazdnik';

/* End of file routes.php */
/* Location: ./application/config/routes.php */