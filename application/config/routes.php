<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['appointment/book'] = 'appointment/book'; 
$route['about'] = 'about';
$route['services'] = 'service';
$route['services/type/(:num)'] = 'service/type/$1';
$route['doctors'] = 'doctor/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
