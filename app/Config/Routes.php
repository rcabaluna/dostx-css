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


$routes->get('survey/external', 'Survey::external');

$routes->get('survey/internal', 'Survey::internal');


$routes->get('thank-you', 'Survey::thank_you');

$routes->post('survey/save','Survey::save');


// REPORTS ROUTES
$routes->get('reports/responses','Reports::responses',['filter' => 'authGuard']);
$routes->get('reports/generate','Reports::generate',['filter' => 'authGuard']);
$routes->post('reports/gen_result','Reports::gen_result',['filter' => 'authGuard']);
$routes->get('reports/gen_pdf','Reports::gen_pdf',['filter' => 'authGuard']);


//USERS ROUTES
$routes->get('user/dashboard','User::dashboard',['filter' => 'authGuard']);