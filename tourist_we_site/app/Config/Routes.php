<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//dashboard
$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard', 'AnalyticsController::index');

//login
$routes->get('sign', 'Sign::view_sign');
$routes->post('sign/register', 'Sign::register'); // Traite les données du formulaire
$routes->get('login', 'Login::view_login');


// afficher touriste
$routes->get('/touristes', 'Touriste::index');
$routes->get('/touriste', 'Touriste::index'); 
$routes->get('/touriste/delete/(:num)', 'Touriste::deleteTouriste/$1');



// guide
$routes->get('guide', 'Guide::index');
$routes->get('/guide/delete/(:num)', 'Guide::deleteGuide/$1');


// event
$routes->get('event', 'EvenementsController::index');
$routes->get('events', 'EvenementsController::index');
$routes->get('/event/delete/(:num)', 'EvenementsController::deleteEvent/$1');


// reservation
$routes->get('/reservation', 'ReservationsController::index');
$routes->get('/reservations', 'ReservationsController::index');
$routes->get('/reservation/delete/(:num)', 'ReservationsController::deleteReservation/$1');


$routes->get('message', 'Message::index');
