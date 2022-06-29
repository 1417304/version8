<?php
include_once 'header.php';
include_once 'db.php';

if (!isset($_SESSION["cart_data"])) {
    echo "
    <script>
    alert('Your cart is empty');
    window.location.href='index.php';
    </script>
    ";
}

// action
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION["cart_data"] as $k => $v) {
            if ($_GET['id'] == $k) {
                unset($_SESSION["cart_data"][$k]);
            }
            if (empty($_SESSION["cart_data"])) {
                unset($_SESSION["cart_data"]);
            }
        }
    }
}


?>
<main class="flex-shrink-0">
    <?php
    if (isset($_SESSION["cart_data"])) {
        $item_total = 0;
    ?>
        <div class="container mt-5">
            <div class="row text-center py-5">
                <div class="col-md-12 mb-4">
                    <h2>Your Cart</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="20%">Product Image</th>
                                    <th width="20%">Product Name</th>
                                    <th width="10%">Quantity</th>
                                    <th width="20%">Price</th>
                                    <th width="15%">Total</th>
                                    <th width="5%">Action</th>
                                </tr>
                                <?php
                                foreach ($_SESSION["cart_data"] as $key => $item) {
                                ?>
                                    <tr>
                                        <td><img src="<?php echo $item["image"]; ?>" alt="no-image" height="100" width="100"></td>
                                        <td><?php echo $item["name"]; ?></td>
                                        <td>
                                            <form action="cartupdate.php" method="post">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="quantity" placeholder="quantity" aria-label="quantity"  value="<?php echo $item["quantity"]; ?>">
                                                    <input type="hidden" name="key" value="<?php echo $key; ?>">
                                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Update</button>
                                                </div> 
                                            </form>

                                        </td>
                                        <td>£<?php echo $item["price"]; ?></td>
                                        <td>£<?php echo number_format($item["quantity"] * $item["price"], 2); ?></td>
                                        <td><a href="cartlist.php?action=remove&id=<?php echo $key; ?>" class="btnRemoveAction">Remove Item</a></td>
                                    </tr>
                                <?php
                                    $item_total += ($item["price"] * $item["quantity"]);
                                }
                                ?>
                                <tr>
                                    <td colspan="5" align=right>
                                        <h5>Total: £<?php echo number_format($item_total, 2); ?></h5>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="">
                            <a href="checkout.php" class="btn btn-primary float-end">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    ?>
</main>

<?php
include_once 'footer.php';
?>