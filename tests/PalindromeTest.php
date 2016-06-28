<?php

/**
 * Palindrome Test
 * 
 * @author Naveen
 */

namespace WebTools\Tests;

require_once dirname(__DIR__) . "/vendor/autoload.php";

class PalindromeTest extends \PHPUnit_Framework_TestCase {

    function testCheck() {
        $this->assertEquals(true, \WebTools\Palindrome::Check(121));
    }

}
