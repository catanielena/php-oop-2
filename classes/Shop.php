<?php
class Shop {
    use Address;
    private $products;

    function __construct($_products = [], $_street = null, $_postal_code = null, $_town = null, $_province = null)
    {
        $this->products = $_products;
        $this->street = $_street;
        $this->postal_code = $_postal_code;
        $this->town = $_town;
        $this->province = $_province;
    }

    // Products
    function getProduct() 
    {
        return $this->products;
    }
    function setProduct($_product) 
    {
        return $this->products[] = $_product;
    }
}