<?php


namespace ImageApp\Controllers;


use ImageApp\Core\Request;
use ImageApp\core\View;
use ImageApp\Models\User;

class UserController
{

    public function index(Request $request)
    {

        $users = User::all();

        View::setData('users', $users);
        View::render('users/index.view');

    }

}