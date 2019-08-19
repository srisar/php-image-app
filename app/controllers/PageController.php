<?php


namespace ImageApp\Controllers;


use ImageApp\Core\App;
use ImageApp\Core\AppRequest;
use ImageApp\Core\View;

class PageController
{

    public function index(AppRequest $request)
    {
        View::render('pages/index.view');
    }

}