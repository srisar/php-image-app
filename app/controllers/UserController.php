<?php


namespace ImageApp\Controllers;


use ImageApp\Core\Request;

class UserController
{

    public function index(Request $request)
    {

        var_dump($request->getParams()->getString('name', false));

        var_dump(BASE_PATH);

    }

}