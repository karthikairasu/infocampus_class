<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Addblog.php']='blog/Addblog';
$route['home.php']='blog/home';
$route['viewblog.php']='blog/viewblog';
$route['saveblog.php']='blog/saveblog';
$route['updateblog.php']='blog/updateblog';
$route['deleteblog.php']='blog/deleteblog';
$route['editblog.php']='blog/editblog';