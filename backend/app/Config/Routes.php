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
$routes->post('/add-event','EventController::addevent');
$routes->post('/update-event-number/(:num)','EventController::updateevent/$1');
$routes->get('/delet-event-number/(:num)','EventController::deleteevent/$1');
$routes->post('/add-event-request','EventRequestController::addeventrequest');
$routes->post('/update-event-number-request/(:num)','EventRequestController::updateeventrequest/$1');
$routes->get('/delet-event-number-request/(:num)','EventRequestController::deleteeventrequest/$1');
$routes->post('addevisitor','VisitorController::addevisitor');
$routes->post('/update-visitor/(:num)','VisitorController::updatevisitor/$1');
$routes->get('/delet-visitor/(:num)','VisitorController::deletevisitor/$1');

