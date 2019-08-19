<?php


namespace ImageApp\Core;

class View
{

    private static $data = [];
    private static $errors = [];


    /**
     * @param $key
     * @param $value
     */
    public static function setData($key, $value)
    {
        self::$data[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     * @throws CoreException
     */
    public static function getData($key)
    {
        if (array_key_exists($key, self::$data)) {
            return self::$data[$key];
        }

        throw new CoreException("{$key} does not exist in view data.");
    }

    public static function setError($key, $value)
    {
        self::$errors[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     * @throws CoreException
     */
    public static function getError($key)
    {
        if (array_key_exists($key, self::$errors)) {
            return self::$errors[$key];
        }

        throw new CoreException("{$key} does not exist in view errors.");
    }

    /**
     * Render view from 'views' folder.
     * Skip 'views' and '.php' in the param.
     * @param $view
     */
    public static function render($view)
    {
        $folder = '../views';
        include_once $folder . "/" . $view . '.php';

    }

}