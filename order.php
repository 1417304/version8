<?php
session_start();
include_once 'db.php';

if($_POST['submit']){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sql = "INSERT INTO orders (name, email, address) VALUES ('$name', '$email', '$address')";
    $result = mysqli_query($conn, $sql);
    if($result){
        $last_id = mysqli_insert_id($conn);
        foreach($_SESSION['cart_data'] as $key => $value){ 
            $product_name = $value['name'];
            $quantity = $value['quantity'];
            $price = $value['price'];
            $image = $value['image']; 
            $sql = "INSERT INTO order_items (order_id, product_name, quantity, price, image) VALUES ('$last_id', '$product_name', '$quantity', '$price', '$image')";

            $result = mysqli_query($conn, $sql);
        }
        // unset($_SESSION['cart_data']);
        echo "
            <script>
            alert('Order placed successfully');
            window.location.href='index.php';
            </script>
            ";
    }
}

