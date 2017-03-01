<?php

namespace pxgamer\Modula;

/**
 * Class Constants
 * @package pxgamer\Modula
 */
class Constants
{
    public static function init()
    {
        define('ROOT_PATH', realpath('..'));
        define('SRC_PATH', realpath(ROOT_PATH . '/src'));
        define('PUBLIC_PATH', realpath(ROOT_PATH . '/public'));
        define('VIEW_PATH', realpath(SRC_PATH . '/views'));

        define('ERROR_404', 'Error 404 - Not Found');
    }
}