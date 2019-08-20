<?php

use ImageApp\Controllers\LoginController;
use ImageApp\Core\Router;
use ImageApp\Controllers\UserController;
use ImageApp\Controllers\PageController;
use ImageApp\Controllers\TestController;

Router::add('/', PageController::class, 'index');
Router::add('/users', UserController::class, 'index');

Router::add('/test', TestController::class, 'test_a');

Router::add('/login', LoginController::class, 'show_login_page');
Router::add('/login-verify', LoginController::class, 'verify_login');
