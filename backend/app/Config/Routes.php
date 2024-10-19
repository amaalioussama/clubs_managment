<?php

use App\Controllers\ClubController;
use App\Controllers\RegisterController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/register', 'RegisterController::register');
$routes->post('login', 'LoginController::login');         
$routes->post('logout', 'SessionController::logout');
$routes->get('/all-users','UserController::allusers');
$routes->get("/all-clubs","ClubController::allclubs");
$routes->get('/addclub','ClubController::addclubview');
$routes->post('/addcl','ClubController::addclub');
$routes->post('/update-club-number/(:num)','ClubController::updateClub/$1');
$routes->get('/delet-club-number/(:num)','ClubController::deleteClub/$1');
