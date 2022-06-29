<?php
session_start();
include_once 'db.php';

if (isset($_POST['key']) && isset($_POST['quantity'])) {
    $key = $_POST['key'];
    $quantity = $_POST['quantity'];
    if (!empty($quantity)) {  
        $_SESSION["cart_data"][$key]["quantity"] = $quantity;
    } else {
        unset($_SESSION["cart_data"][$key]);
    }

    header("Location: cartlist.php");

}


?>