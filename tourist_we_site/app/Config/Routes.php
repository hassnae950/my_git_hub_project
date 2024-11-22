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
$routes->get('/touristes', 'Touriste::index'); // Affiche la liste des touristes via la méthode index
$routes->get('/touriste', 'Touriste::index'); // Utilise la méthode viewTouriste
$routes->get('/touriste/delete/(:num)', 'Touriste::deleteTouriste/$1');



// guide
$routes->get('guide', 'Guide::index');

// event
$routes->get('event', 'EvenementsController::index');
$routes->get('events', 'EvenementsController::index');

// reservation
$routes->get('/reservation', 'ReservationsController::index');
$routes->get('/reservations', 'ReservationsController::index');

$routes->get('message', 'Message::index');
