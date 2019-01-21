<?php

namespace Linio;

class Multiples implements VerifyMultiple, PrintMultiple {
    protected $number;

    public function isMultiple(){}
    public function output(){}

    public function __construct(int $number = null) {
        $this->number = $number;
    }

    public function setNumber($number) {
        $this->number = $number;
        return $this;
    }

    public function outputMultiples(&$output) {
        if($this->isMultiple()) {
            $output = $this->output();
        }

        return $this;
    }
}