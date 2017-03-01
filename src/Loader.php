<?php

namespace pxgamer\Modula;

/**
 * Class Loader
 * @package pxgamer\Modula
 */
class Loader
{
    /**
     * @param string $view
     * @param bool $return
     * @return null|string
     */
    public static function view($view, $return = false)
    {
        if (file_exists(VIEW_PATH . $view . '.php')) {
            ob_start();

            include VIEW_PATH . $view . '.php';

            // Return the file data if requested
            if ($return) {
                $buffer = ob_get_contents();
                @ob_end_clean();
                return $buffer;
            }
        } else {
            return ERROR_404;
        }
    }
}