<?php

// request class

class request
{
    public static function get( $name , $default = null)
    {
        if(isset($_REQUEST[$name]))
        {
            return $_REQUEST[$name];
        }
        else
        {
            return $default;
        }

    }

}
/**
 * Created by PhpStorm.
 * User: faizanmajeed
 * Date: 5/24/17
 * Time: 11:31 AM
 */