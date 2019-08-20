<?php

use ImageApp\core\App;
use ImageApp\core\LoginManager;

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= App::getSiteURL() ?>/assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?= App::getSiteURL() ?>/assets/styles/app.css">

    <title>Image Mapper</title>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Image Mapper</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= App::createURL('/') ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= App::createURL('/test') ?>" tabindex="-1" aria-disabled="true">TEST</a>
            </li>
        </ul>
        <div class="my-2 my-lg-0">
            <?php if (LoginManager::isLoggedIn()): ?>
                Welcome, <?= LoginManager::getUsername() ?>
                <a class="btn btn-warning" href="<?= App::createURL('/logout') ?>">logout</a>
            <?php else: ?>
                <a class="btn btn-success" href="<?= App::createURL('/login') ?>">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<br>