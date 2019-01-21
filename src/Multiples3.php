<?php

namespace Linio;

class Multiples3 extends Multiples {
    public function __construct($number = null) {
        parent::__construct($number);
    }

    public function isMultiple() {
        return $this->number % 3 === 0;
    }

    public function output() {
        return 'Linio';
    }
}