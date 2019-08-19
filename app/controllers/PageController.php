<?php


namespace ImageApp\Controllers;


use ImageApp\Core\App;
use ImageApp\Core\Request;
use ImageApp\Core\View;

class PageController
{

    public function index(Request $request)
    {
        View::render('pages/index.view');
    }

}