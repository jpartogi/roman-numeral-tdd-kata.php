<?php

use RomanNumeral;

class ConverterTest extends PHPUnit_Framework_TestCase
{
    private $romanNumeral = null;
    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        $this->romanNumeral = new RomanNumeral();
    }


    public function testI(){
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
    }

}