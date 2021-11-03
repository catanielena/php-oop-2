<?php
require_once __DIR__ . "./User.php";
class PremiumUser extends User {
    public $premium = 'premium';

    function __construct($_name, $_last_name, $_age, $_password, $_credit_card = [])
    {
        parent:: __construct($_name, $_last_name, $_age, $_password, $_credit_card = []);
    }

    public function getSubscription()
    {
        return $this->subscription;
    }
    public function setSubscription($_subscription)
    {
        $this->subscription = $_subscription ;
    }
}