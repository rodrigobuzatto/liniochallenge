<?php

namespace Linio;

class Multiples3and5 extends Multiples {
    private $multiples3;
    private $multiples5;

    public function __construct(Multiples3 $multiples3, Multiples5 $multiples5) {
        $this->multiples3 = $multiples3;
        $this->multiples5 = $multiples5;
    }

    public function isMultiple() {
        return $this->multiples3->isMultiple() && $this->multiples5->isMultiple();
    }

    public function output() {
        return 'Linianos';
    }
}