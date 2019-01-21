<?php

namespace Linio;

class Multiples5 extends Multiples {
    public function __construct($number = null) {
        parent::__construct($number);
    }

    public function isMultiple() {
        return $this->number % 5 === 0;
    }

    public function output() {
        return 'IT';
    }
}