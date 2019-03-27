<?php

class Product {
    protected $_type;
    protected $_price;

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