<?php
session_start();
include_once 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    $itemArray = array($product['id'] => array('name' => $product['name'], 'id' => $product['id'], 'quantity' => 1, 'price' => $product['price'], 'image' => $product['image']));
    if (!empty($_SESSION["cart_data"])) {
        if (in_array($product['id'], array_keys($_SESSION["cart_data"]))) {
            foreach ($_SESSION["cart_data"] as $k => $v) {
                if ($product['id'] == $k) {
                    if (empty($_SESSION["cart_data"][$k]["quantity"])) {
                        $_SESSION["cart_data"][$k]["quantity"] = 0;
                    }
                    $_SESSION["cart_data"][$k]["quantity"] += 1;
                }
            }
        } else {
            $_SESSION["cart_data"] = array_merge($_SESSION["cart_data"], $itemArray);
        }
    } else {
        $_SESSION["cart_data"] = $itemArray;
    } 

    echo "
        <script>
        alert('Product added to the cart successfully');
        window.location.href='index.php';
        </script>
        ";

}

?>


