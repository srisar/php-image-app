<?php

require_once "../bootstrap.php";

use ImageApp\Core\Router;

$url = $_SERVER['REDIRECT_URL'];
Router::route($url);