<?php
declare(strict_types=1);

require_once "vendor/autoload.php";
require_once "routes.php";

use ImageApp\Core\Database;
use ImageApp\Core\AppSession;

AppSession::init();

$config = [
    "host" => "localhost",
    "dbname" => "imagemap_db",
    "user" => "root",
    "pass" => "",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]
];

/**
 * Initializing static app assets
 */
Database::init($config);

/**
 * Defining the base path for accessing assets and other resources
 * from root path
 */
define('BASE_PATH', __DIR__);