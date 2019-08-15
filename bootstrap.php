<?php
declare(strict_types=1);

require_once "vendor/autoload.php";
require_once "routes.php";

use ImageApp\Core\Database;

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

Database::init($config);

define('BASE_PATH', __DIR__);