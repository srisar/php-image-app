<?php


namespace ImageApp\Controllers;


use ImageApp\Core\App;
use ImageApp\Core\AppRequest;
use ImageApp\Core\AppSession;
use ImageApp\core\LoginManager;
use ImageApp\Core\View;

class PageController
{

    public function index(AppRequest $request)
    {

        LoginManager::isLoggedInOrRedirect();

        View::render('pages/index.view');
    }

}