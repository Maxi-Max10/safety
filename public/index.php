<?php
declare(strict_types=1);

require __DIR__ . '/../src/bootstrap.php';

$router = new App\Core\Router();
$router->get('/', 'AuthController@showLogin');
$router->get('/login', 'AuthController@showLogin');
$router->post('/login', 'AuthController@login');
$router->post('/logout', 'AuthController@logout');

$router->get('/admin', 'AdminController@dashboard');
$router->post('/admin/assign', 'AdminController@assignWorksite');
$router->get('/admin/report', 'AdminController@report');

$router->get('/worker', 'WorkerController@dashboard');
$router->post('/worker/checkin', 'WorkerController@checkin');
$router->post('/worker/checkout', 'WorkerController@checkout');
$router->post('/worker/photo', 'WorkerController@uploadPhoto');

$router->dispatch();
