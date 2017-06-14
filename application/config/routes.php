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

$route['default_controller'] = "home";
$route['portfolio/:num'] = "portfolio/get_deatils";//pagiation the portfolio
$route['404_override'] = '';
$route['single_product/:num'] = "single_product/index";//pagiation the portfolio
$route['products/:num'] = "products";
$route['ebanner/:num'] = "ebanner";
$route['dbanner/:num'] = "dbanner";
$route['ecustomer/:num'] = "ecustomer";
$route['edit_best_three/:num'] = "edit_best_three";
$route['dcustomer/:num'] = "dcustomer";
$route['e_about/:num'] = "e_about";
$route['eservice/:num'] = "eservice";
$route['dservice/:num'] = "dservice";
$route['eproduct/:num'] = "eproduct";
$route['dproduct/:num'] = "dproduct";
$route['edit_port/:num'] = "edit_port";
$route['delete_port/:num'] = "delete_port";
$route['portfolio_profile/:num'] = "portfolio_profile";
$route['edit_portofolio_profile/:num'] = "edit_portofolio_profile";
$route['edit_portofolio_profile/:num/:num'] = "edit_portofolio_profile";
$route['dlogos/:num'] = "dlogos";
$route['elogos/:num'] = "elogos";
$route['dbrand/:num'] = "dbrand";
$route['dquote/:num'] = "dquote";
$route['dclasses/:num'] = "dclasses";
$route['services/:num'] = "services";


// edit_portofolio_profile
$route['404_override'] = '';
