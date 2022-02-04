<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('registration', 'DefaultController');
Router::get('main_page', 'DefaultController');
Router::get('development', 'DefaultController');
Router::get('design', 'DefaultController');
Router::get('administration', 'DefaultController');
Router::get('sci_fi', 'DefaultController');


Router::post('login', 'SecurityController');

Router::run($path);