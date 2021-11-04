<?php
require_once __DIR__ . "./Product.php";
    class Sofa extends Product {
        protected $category = 'Sofa';

        function __construct($_id, $_name, $_price, $_brand)
        {
            parent:: __construct($_id, $_name, $_price, $_brand);
        }

        public function getCategory()
        {
            return $this->category;
        }
    }