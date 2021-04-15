<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home.php']='main/index';
$route['viewprofile.php']='main/viewprofile';
$route['editprofile.php']='main/editprofile';
$route['addprofile.php']='main/addprofile';
$route['updateprofile.php']='main/updateprofile';
$route['deleteprofile.php']='main/deleteprofile';
$route['saveprofile.php']='main/saveprofile';
