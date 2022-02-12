<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

//Router::get('', 'DefaultController');
Router::get('development', 'DefaultController');
Router::get('design', 'DefaultController');
Router::get('administration', 'DefaultController');
Router::get('sci_fi', 'DefaultController');
Router::get('like', 'ArticleController');
Router::get('dislike', 'ArticleController');

Router::get('main_page', 'ArticleController');
Router::post('add_article', 'ArticleController');
Router::post('search', 'ArticleController');

Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');

Router::run($path);