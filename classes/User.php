<?php
require_once __DIR__ . "./PremiumUser.php";
    class User {
        use Address;
        protected $name;
        protected $last_name;
        protected $age;
        protected $password;
        protected $credit_card;
        protected $sconto = 0;
        /**
        * __construct
        * 
        * @param string $_name
        * @param string $_last_nam
        * @param int $_age
        * @param string $_password
        * 
        */
        function __construct($_name, $_last_name, $_age, $_password, $_credit_card = [])
        {
            $this->name = $_name;
            $this->last_name = $_last_name;
            $this->age = $_age;
            if(strlen($_password) < 5) {
                throw new Exception("ERROR! The password must be at least 5 characters long");
            } else if (!preg_match('/[A-Z]/', $_password)) {
                throw new Exception("ERROR! The password must contain at least one uppercase letter");
            } else if (!preg_match('/\d/', $_password)) {
                throw new Exception("ERROR! The password must contain at least one number");
            } else if (!preg_match('/[^a-zA-Z\d]/', $_password)) {
                throw new Exception("ERROR! The password must contain at least one special character");
            }
            $this->password = $_password; 
            $this->credit_card = $_credit_card;
            if($this->premium) {
                $this->sconto = 0.5;
            }
        }

        // Name
        function getName() 
        {
            return $this->name;
        }
        // LastName
        function getLastName() 
        {
            return $this->last_name;
        }
        // Age
        function getAge() 
        {
            return $this->age;
        }
        // CreditCard
        function getCreditCard() 
        {
            return $this->credit_card;
        }
        function setCreditCard($_credit_card) 
        {
            $this->credit_card = $_credit_card;
        }

    }