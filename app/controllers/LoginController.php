<?php


namespace ImageApp\Controllers;


use ImageApp\Core\App;
use ImageApp\Core\AppRequest;
use ImageApp\Core\AppSession;
use ImageApp\core\LoginManager;
use ImageApp\Core\View;
use ImageApp\Models\User;

class LoginController
{

    public function show_login_page(AppRequest $request)
    {
        if(LoginManager::isLoggedIn())
            App::redirect('/');
        View::render('login/login.view');

    }

    public function verify_login(AppRequest $request)
    {

        $fields = [
            'username' => $request->getParams()->getString('username'),
            'password_string' => $request->getParams()->getString('password_string'),
            'token' => $request->getParams()->getString('token'),
        ];

        $user = User::findByUsername($fields['username']);


        $result = LoginManager::validateLogin($user, $fields['password_string']);

        if ($result) {
            App::redirect('/');
        } else {
            die('Error!');
        }


    }

}