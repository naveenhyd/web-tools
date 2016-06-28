<?php

/**
 * To check the string is palindrome or not
 * 
 * @author Naveen
 */
require_once "autoload.php";

namespace WebTools;

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
