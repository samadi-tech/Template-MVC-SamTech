<?php
require_once __DIR__.'/../vendor/autoload.php';

use SamtechSkripsi\App\Router;
use SamtechSkripsi\Controller\HomeController;
use SamtechSkripsi\Controller\LoginController;
use SamtechSkripsi\Controller\ProductController;
use SamtechSkripsi\Controller\RegisterController;

Router::add("GET","/", HomeController::class,"Home");
Router::add("GET","/login", LoginController::class,"Login");
Router::add("GET","/register", RegisterController::class,"Register");

Router::add("GET","/product/([0-9a-zA-Z]*)/category/([0-9a-zA-Z]*)",ProductController::class,"Category");

Router::run();