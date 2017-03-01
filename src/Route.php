<?php

namespace pxgamer\Modula;

/**
 * Class Route
 * @package pxgamer\Modula
 */
class Route
{
    /**
     * @return string
     */
    public static function get()
    {
        if ($_SERVER['REQUEST_URI'] !== '/' && $_SERVER['REQUEST_URI'] !== '/index.php') {
            $no_query = explode('?', $_SERVER['REQUEST_URI'])[0];
            return $no_query;
        } else {
            return '';
        }
    }

    /**
     * @param string $key
     * @return bool|string
     */
    public static function getQuery($key)
    {
        if (isset($_REQUEST[$key])) {
            return $_REQUEST[$key];
        } else {
            return false;
        }
    }
}