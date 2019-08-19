<?php


namespace ImageApp\Controllers;


use ImageApp\Core\AppRequest;
use ImageApp\core\View;
use ImageApp\Models\User;

class UserController
{

    public function index(AppRequest $request)
    {

        $users = User::all();

        View::setData('users', $users);
        View::render('users/index.view');

    }

}