<?php

class Product {
    protected $_type;
    protected $_price;

   final public function calculateProductVAT() {
        return $this->_price * 0.20;
    }

    public function __construct($value, $price) {
        $this->_type = $value;
        $this->_price = $price;
    }

    public function getProductType() {
        return $this->_type;
    }

    public function getProductPrice() {
        return $this->_price;
    }
}

?>