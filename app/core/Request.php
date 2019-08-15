<?php


namespace ImageApp\Core;


class Request
{

    const GET = "GET";
    const POST = "POST";

    private $params, $files, $host, $method, $url, $cookies;

    public function __construct()
    {
        $this->host = $_SERVER['HTTP_HOST'];
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->url = $_SERVER['REDIRECT_URL'];
        $this->params = new RequestFilter($_REQUEST);
        $this->cookies = new RequestFilter($_COOKIE);
        $this->files = new RequestFilter($_FILES);
    }

    public function isGET(): bool
    {
        return $this->method == self::GET;
    }

    public function isPOST(): bool
    {
        return $this->method == self::POST;
    }

    public function getParams(): RequestFilter
    {
        return $this->params;
    }

}