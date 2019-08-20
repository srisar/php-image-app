<?php


namespace ImageApp\controllers;


use ImageApp\Core\App;
use ImageApp\Core\AppSession;
use ImageApp\Models\User;

class TestController
{

    public function test_a()
    {

        var_dump(password_hash('admin', PASSWORD_DEFAULT));

    }

}