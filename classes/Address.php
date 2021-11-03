<?php

trait Address {
    private $street;
    private $town;
    private $province;
    private $postal_code;
    //
    // getAddress
    //
    public function getAddress($street, $postal_code, $town, $province)
    {
        return "{$street}, {$postal_code} {$town}, {$province}";
    }
    //
    // Street
    //
    function getStreet() 
    {
        return $this->street;
    }
    function setStreet($_street) 
    {
        $this->street = $_street;
    }
    //
    // PostalCode
    //
    function getPostalCode() 
    {
        return $this->postal_code;
    }
    /**
    * setPostalCode
    * 
    * @param string $_postal_code es.(25010)
    */
    function setPostalCode($_postal_code) 
    {
        if(!is_numeric($_postal_code)) {
            throw new Exception("ERROR! The entered postal code is not a number");
        } else if (strlen($_postal_code) != 5) {
            throw new Exception("ERROR! The postal code must be composed of 5 digits");
        }
        $this->postal_code = $_postal_code;
    }
    //
    // Town
    //
    function getTown() 
    {
        return $this->town;
    }
    /**
    * setTown
    * 
    * @param string $_town
    */
    function setTown($_town) 
    {
        $this->town = ucwords($_town);
    }
    //
    // Province
    //
    function getProvince() 
    {
        return $this->province;
    }
    /**
    * setProvince
    * 
    * @param string $_province es.(MI)
    */
    function setProvince($_province) 
    {
        $this->province = strtoupper($_province);
    }
}