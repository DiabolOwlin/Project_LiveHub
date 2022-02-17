<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');

Router::get('like', 'ArticleController');
Router::get('dislike', 'ArticleController');

Router::get('main_page', 'ArticleController');
Router::get('development', 'ArticleController');
Router::get('design', 'ArticleController');
Router::get('administration', 'ArticleController');
Router::get('sci_fi', 'ArticleController');

Router::post('add_article', 'ArticleController');
Router::post('search', 'ArticleController');

Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');

Router::run($path);