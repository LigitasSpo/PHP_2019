<?php

class Calculator {
    protected $total;

    public function add($value) {
        $this->total += $value;
    }


    public function substract($value) {
        $this->total -= $value;
    }

    public function getTotal() {
        return $this->total;
    }
}