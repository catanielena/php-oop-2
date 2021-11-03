<?php
    require_once __DIR__ . "./PrdCategory.php";
    class Product {
        private $id;
        private $name;
        private $price;
        private $brand;
        /**
        * __construct
        * 
        * @param int $_id
        * @param string $_name 
        * @param string $_brand
        * @param int $_price ~ 15,50
        * @param string $_brand 
        * 
        */
        function __construct($_id, $_name, $_price, $_brand)
        {
            $this->id = $_id;
            $this->name = $_name;
            $this->price = number_format($_price, 2);
            $this->brand = $_brand;           
        }

        public function getId() 
        {
            return $this->id;
        }

        public function getName() 
        {
            return $this->name;
        }

        public function getPrice() 
        {
            return $this->price;
        }

        public function getBrand() 
        {
            return $this->brand;
        }
    }