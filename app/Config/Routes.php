<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->match(['get','post'],'/login','Home::login');
$routes->match(['get','post'],'/logout','Home::logout');


$routes->get('/admin/dashboard', 'Admin::dashboard',['filter' => 'authGuard']);
$routes->get('/admin/registry/quarters', 'Admin::quarters',['filter' => 'authGuard']);
$routes->get('/admin/activate_quarter/(:any)','Admin::activate_quarter/$1');


$routes->get('survey/(:segment)(/(:any))?', 'Survey::index/$1', ['as' => 'survey_index','filter' => 'authGuard']);
$routes->get('thank-you', 'Survey::thank_you', ['filter' => 'authGuard']);

$routes->post('survey/save','Survey::save');


// REPORTS ROUTES
$routes->get('reports/responses','Reports::responses');