<?php

namespace Linio\Tests;

use Linio\Multiples3;
use PHPUnit\Framework\TestCase;

class Multiples3Test extends TestCase
{
    private $multiples3;
    private $number;
    
    public function setUp() {
        $this->multiples3 = new Multiples3();
        parent::setUp();
    }

    public function testIfIsNotMultiples3() {
        $this->multiples3->setNumber(4);
        $this->assertEquals(false, $this->multiples3->isMultiple(), '4 is not multiple of 3');
    }

    public function testIfIsMultiples3() {
        $this->multiples3->setNumber(3);
        $this->assertEquals(true, $this->multiples3->isMultiple(), '3 is multiple of 3');

        $this->multiples3->setNumber(15);
        $this->assertEquals(true, $this->multiples3->isMultiple(), '15 is multiple of 3');
        
        $this->multiples3->setNumber(33);
        $this->assertEquals(true, $this->multiples3->isMultiple(), '33 is multiple of 3');
    }

    public function testOutputIfIsNotMultiples3() {
        $output = $this->number = 4;
        $this->multiples3->setNumber($this->number);
        $this->multiples3->outputMultiples($output);
        $this->assertNotEquals('Linio', $output);
    }

    public function testOutputIfIsMultiple3() {
        $output = $this->number = 3;
        $this->multiples3->setNumber($this->number);
        $this->multiples3->outputMultiples($output);
        $this->assertEquals('Linio', $output);
    }

}