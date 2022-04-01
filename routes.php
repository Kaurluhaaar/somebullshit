<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
// $router->get('about/culture', 'controllers/about-culture.php');

$router->get('locations', 'LocationsController@index');
$router->post('locations', 'LocationsController@store');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');