<?php

namespace ImageApp\Core;

use Exception;

class AppSession
{


    private const CSRF_TOKEN = 'csrf_token';
    private const USER_ID = 'user_id';
    private const LOGGED_IN = 'logged_in';
    private const USER_NAME = 'user_name';

    public static function init()
    {
        session_start();
    }

    public static function terminate()
    {
        $_SESSION = null;
        session_destroy();
    }

    public static function getData($key)
    {
        if (isset($_SESSION[$key]))
            return $_SESSION[$key];

        return null;
    }

    public static function setData($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Generate a cryptographically strong CSRF token,
     * and store it in the session.
     */
    public static function generateCSRFToken()
    {

        try {
            $bytes = random_bytes(32);

            $_SESSION[self::CSRF_TOKEN] = bin2hex($bytes);

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    /**
     * Returns the generated  CSRF token, if not generated already, new one will be generated.
     * @return string
     */
    public static function getCSRFToken()
    {
        if (isset($_SESSION[self::CSRF_TOKEN])) {
            return $_SESSION[self::CSRF_TOKEN];
        } else {
            self::generateCSRFToken();
            return self::getCSRFToken();
        }
    }


    /**
     * This checks if the token submitted from user is same as the original one.
     * @param $token
     * @return bool
     */
    public static function validateCSRFToken($token)
    {
        return hash_equals($_SESSION[self::CSRF_TOKEN], $token);
    }




}
