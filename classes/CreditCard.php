<?php
    class CreditCard {
        private $number;
        private $cvv;
        private $expiration_month;
        private $expiration_year;
        /**
        * __construct
        * 
        * @param string $_number
        * @param string $_cvv
        * @param int $_expiration_month es(8)
        * @param int $_expiration_year es.(2008)
        * 
        */        
        function __construct($_number = null, $_cvv = null, $_expiration_month = null, $_expiration_year = null)
        {
            $this->number = $_number;
            $this->cvv = $_cvv;
            $this->expiration_month = $_expiration_month; 
            $this->expiration_year = $_expiration_year;          
        }
        //
        // number
        //
        /**
        * setCreditCard
        * 
        * @param int $_number 16 digits
        */  
        function setCreditCard($_number) 
        {
            if(strlen($_number) != 16) {
                throw new Exception("ERROR! The credit card number is incorrect");
            }
            $this->number = $_number;
        }
        function getCreditCard($_number) 
        {
            return $this->number;
        }
        //
        // cvv
        //
        /**
        * setCVV
        * 
        * @param int $_number 3 digits
        */  
        function setCVV($_cvv) 
        {
            if(strlen($_cvv) != 3) {
                throw new Exception("ERROR! The cvv of the credit card must contain 3 numbers");
            }
            $this->cvv = $_cvv;
        }
        function getCVV($_number) 
        {
            return $this->cvv;
        }
        //
        // expiration_date
        //
        /**
        * setExpirationDate
        * 
        * @param int $_expiration_month
        * @param int $_expiration_year
        */  
        function setExpirationDate($_expiration_month, $_expiration_year) 
        {
            if(!is_numeric($_expiration_month) || !is_numeric($_expiration_year) || strlen($_expiration_year) != 4 || strlen($_expiration_month) > 2) {
                throw new Exception("ERROR! The formatting of the month or / and year is incorrect");
            } else if ($_expiration_year < date("Y") || $_expiration_year == date("Y") && $_expiration_month <= date('m')) {
                throw new Exception("ERROR! The card has expired");
            }
            $this->expiration_month = $_expiration_month;
            $this->expiration_year = $_expiration_year;
        }

        function getExpirationDate($_expiration_month, $_expiration_year) 
        {
            return \DateTime::createFromFormat('m/y', $_expiration_month.$_expiration_year);
        }
    }