<?php
require_once __DIR__ . "./classes/Address.php";
require_once __DIR__ . "./classes/Shop.php";
require_once __DIR__ . "./classes/Product.php";
require_once __DIR__ . "./classes/PrdCategory.php";
require_once __DIR__ . "./classes/PremiumUser.php";
require_once __DIR__ . "./classes/User.php";
require_once __DIR__ . "./classes/CreditCard.php";
require_once __DIR__ . "./classes/Sofa.php";
require_once __DIR__ . "./classes/Lamp.php";
// 
// 
// new-products
$lamp = new Lamp(1, "lamp01", 54.50, "flos");
$sofa = new Sofa(2, "sofa01", 180.99, "flos");
// new-shop
$ikea = new Shop();
$ikea->setProvince('mi');
// new-shop__set-postal-code
try {
    $ikea->setPostalCode("05998");
} catch (Exception $e) {
    echo $e->getMessage();
}
// new-shop__add-products
$ikea->setProduct($lamp);
$ikea->setProduct($sofa);
// stamp_ikea
var_dump($ikea);
// 
// Add User Dumbo
try {
    $dumbo = new User('Dumbo', 'Disney', 12, "aaa");
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}

try {
    $dumbo = new User('Dumbo', 'Disney', 12, "aaaaa");
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}

try {
    $dumbo = new User('Dumbo', 'Disney', 12, "aaaaaS");
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}

try {
    $dumbo = new User('Dumbo', 'Disney', 12, "aaa4aaS");
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}
// Add User Pluto
try {
    $pluto = new PremiumUser('Pluto', 'Disney', 25, "aaa(ss4aaS");
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}
// pluto credit card
$plutoCard = new CreditCard();
// expiration date
try {
    $plutoCard->setExpirationDate(12,1997);
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}
//
try {
    $plutoCard->setExpirationDate(12,2021);
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}
//
try {
    $plutoCard->setExpirationDate(12,2025);
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}
// card number
try {
    $plutoCard->setCreditCard("8495384592839482");
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}
// cvv
try {
    $plutoCard->setCVV("849");
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
}
//set credit card
$pluto->setCreditCard($plutoCard);
// stamp_pluto
var_dump($pluto);