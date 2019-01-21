<?php

namespace Linio\Tests;

use Linio\Multiples5;
use PHPUnit\Framework\TestCase;

class Multiples5Test extends TestCase {
    private $multiples5;
    private $number;

    public function setUp() {
        $this->multiples5 = new Multiples5();
        parent::setUp();
    }

    public function testIfIsNotMultiples5() {
        $this->multiples5->setNumber(4);
        $this->assertEquals(false, $this->multiples5->isMultiple(), '4 is not multiple of 5');
    }

    public function testIfIsMultiples5() {
        $this->multiples5->setNumber(5);
        $this->assertEquals(true, $this->multiples5->isMultiple(), '5 is multiple of 5');

        $this->multiples5->setNumber(15);
        $this->assertEquals(true, $this->multiples5->isMultiple(), '15 is multiple of 5');

        $this->multiples5->setNumber(30);
        $this->assertEquals(true, $this->multiples5->isMultiple(), '30 is multiple of 5');
    }

    public function testOutputIfIsNotMultiples5() {
        $output = $this->number = 3;
        $this->multiples5->setNumber($this->number);
        $this->multiples5->outputMultiples($output);
        $this->assertNotEquals('IT', $output);
    }

    public function testOutputIfIsMultiples5() {
        $output = $this->number = 5;
        $this->multiples5->setNumber($this->number);
        $this->multiples5->outputMultiples($output);
        $this->assertEquals('IT', $output);
    }

}