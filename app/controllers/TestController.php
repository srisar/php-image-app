<?php


namespace ImageApp\controllers;


use ImageApp\Models\User;

class TestController
{

    public function test_a()
    {

        $user = User::find(1);

        var_dump($user);

        $time = strtotime($user->getCreatedAt());

        $created_on = date('Y-m-j', $time);

        var_dump($created_on);

    }

}