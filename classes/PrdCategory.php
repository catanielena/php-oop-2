<?php
require_once __DIR__ . "./Product.php";
    class PrdCategory extends Product {
        private $category;

        function __construct($_id, $_name, $_price, $_brand, $_category = null)
        {
            parent:: __construct($_id, $_name, $_price, $_brand);
            $this->category = $_category;
        }
        /**
        * setCategory
        * 
        * @param string $_category
        */
        public function setCategory($_category)
        {
            $this->category = $_category;
        }

        public function getCategory()
        {
            return $this->category;
        }
    }