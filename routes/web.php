<?php
use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\PropertyController;

$router->get('/', [HomeController::class, 'index']);
$router->get('/properties', [PropertyController::class, 'search']);
$router->get('/property', [PropertyController::class, 'show']);
$router->get('/admin', [AdminController::class, 'dashboard']);
$router->get('/login', [AuthController::class, 'login']);
