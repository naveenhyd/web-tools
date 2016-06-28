<?php

/**
 * To check the string is palindrome or not
 * 
 * @author Naveen
 */

namespace WebTools;

require_once dirname(__DIR__) . "/vendor/autoload.php";

class Palindrome {

    /**
     * 
     * @param string $str
     * @return boolean
     */
    public static function Check($str) {
        if ($str == strrev($str)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
