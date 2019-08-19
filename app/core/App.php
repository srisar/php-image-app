<?php


namespace ImageApp\Core;


class App
{

    /**
     * Returns a site base url
     * @return string
     */
    public static function getSiteURL(): string
    {
        $request = new Request();
        return $request->getScheme() . '://' . $request->getHost();
    }


    public static function getBasePath()
    {
        return BASE_PATH;
    }
}