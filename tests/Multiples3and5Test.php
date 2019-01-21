<?php

namespace Linio\Tests;

use Linio\Multiples3;
use Linio\Multiples5;
use Linio\Multiples3and5;
use PHPUnit\Framework\TestCase;

class Multiples3and5Test extends TestCase {
    private $multiples3;
    private $multiples5;
    private $multiples3and5;

    public function setUp() {
        $this->multiples3 = new Multiples3();
        $this->multiples5 = new Multiples5();
        $this->multiples3and5 = new Multiples3and5($this->multiples3, $this->multiples5);
        parent::setUp();
    }

    public function testIfIsNotMultiple3and5() {
        $this->number = 5;
        $this->multiples3->setNumber($this->number);
        $this->multiples5->setNumber($this->number);
        $this->assertEquals(false, $this->multiples3and5->isMultiple(), '5 is not multiple of 3 and 5');
    }

    public function testIfIsMultiple3and5() {
        $this->number = 15;
        $this->multiples3->setNumber($this->number);
        $this->multiples5->setNumber($this->number);
        $this->assertEquals(true, $this->multiples3and5->isMultiple(), '15 is multiple of 3 and 5');

        $this->number = 30;
        $this->multiples3->setNumber($this->number);
        $this->multiples5->setNumber($this->number);
        $this->assertEquals(true, $this->multiples3and5->isMultiple(), '30 is multiple of 3 and 5');
    }

    public function testOutputIfIsNotMultiple3and5() {
        $output = $this->number = 3;
        $this->multiples3->setNumber($this->number);
        $this->multiples5->setNumber($this->number);
        $this->multiples3and5->outputMultiples($output);
        $this->assertNotEquals('Linianos', $output);
    }

    public function testOutputIfIsMultiples3and5() {
        $output = $this->number = 15;
        $this->multiples3->setNumber($this->number);
        $this->multiples5->setNumber($this->number);
        $this->multiples3and5->outputMultiples($output);
        $this->assertEquals('Linianos', $output);
    }
}