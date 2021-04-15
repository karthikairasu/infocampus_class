<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home.php']='Welcome/index';
$route['contact.html']='Welcome/contact';
$route['viewcontact.php']='Welcome/viewcontact';
$route['savecontact.php']='Welcome/savecontact';
$route['deletecontact.php']='Welcome/deletecontact';
$route['updatecontact.php']='Welcome/updatecontact';
$route['editcontact.php']='Welcome/editcontact';