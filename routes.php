<?php

use ImageApp\Core\Router;
use ImageApp\Controllers\UserController;

Router::add('/user', UserController::class, 'index');