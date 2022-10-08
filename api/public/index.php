<?php

use Router\Routes;

require_once realpath("../vendor/autoload.php");

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$route = new Routes($_GET['url']);

//SITE WEB
$route->get('/', 'App\controllers\siteWeb\ControllerSw@homePageSw');
$route->get('/home', 'App\controllers\siteWeb\ControllerSw@homePageSw');
$route->get('/menu/:params', 'App\controllers\siteWeb\ControllerSw@produitsMenu');
$route->get('/facebook', 'App\controllers\siteWeb\ControllerSw@facebook');

//DASHBOARD
$route->get('/dashboard', 'App\controllers\dashboard\ControllerDash@login');
$route->get('/dashboard/logout', 'App\controllers\dashboard\ControllerDash@login');
$route->post('/dashboard/auth', 'App\controllers\dashboard\ControllerDash@auth');
$route->get('/dashboard/loading', 'App\controllers\dashboard\ControllerDash@loading');
$route->get('/dashboard/home', 'App\controllers\dashboard\ControllerDash@home');
$route->get('/dashboard/menus', 'App\controllers\dashboard\ControllerDash@menus');
$route->get('/dashboard/menu/:params', 'App\controllers\dashboard\ControllerDash@produitsMenu');
$route->post('/dashboard/menu/:params', 'App\controllers\dashboard\ControllerDash@produitsMenu');

$route->run();