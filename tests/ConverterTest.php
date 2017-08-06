<?php

class ConverterTest extends PHPUnit_Framework_TestCase
{
    private $romanNumeral = null;
    
    protected function setUp() {
        $this->romanNumeral = new RomanNumeral();
    }

    public function testI(){
        $result = $this->romanNumeral->convert("I");

        $this->assertEquals(1, $result);
    }

    public function testV(){
        $result = $this->romanNumeral->convert("V");

        $this->assertEquals(5, $result);
    }

    public function testX(){
        $result = $this->romanNumeral->convert("X");

        $this->assertEquals(10, $result);
    }

    public function testL(){
        $result = $this->romanNumeral->convert("L");

        $this->assertEquals(50, $result);
    }

    public function testC(){
        $result = $this->romanNumeral->convert("C");

        $this->assertEquals(100, $result);
    }

    public function testD(){
        $result = $this->romanNumeral->convert("D");

        $this->assertEquals(500, $result);
    }

    public function testM(){
        $result = $this->romanNumeral->convert("M");

        $this->assertEquals(1000, $result);
    }

/*
    public function testMCMLXXXII(){
        $result = $this->romanNumeral->convert("MCMLXXXII");

        $this->assertEquals(1982, $result);                        
    }
*/
    protected function tearDown(){
        $this->romanNumeral = null;
    }

}