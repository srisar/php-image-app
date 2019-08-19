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
        $request = new AppRequest();
        return $request->getScheme() . '://' . $request->getHost();
    }

}