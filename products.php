<?php
include_once 'header.php';
include_once 'db.php';
?>

<?php 
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * FROM products WHERE category = '$category'";
} 
elseif (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM products WHERE name = '$search'";
} 
else {
    $sql = "SELECT * FROM products";
}

$productSql = "SELECT * FROM products";
$productSql = $conn->query($productSql);



 
 
$result = $conn->query($sql);

?>

<main class="flex-shrink-0">
    <div class="container mt-5">
    <div class="row justify-content-center">
                     <h2 class="mt-5">Products:</h2>
                 </div> 
        <div class="row text-center py-5"> 
            
            <?php
            if ($result->num_rows > 0) { 
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-3">
                        <div class="card shadow m-2 p-1">
                            <img class="card-img-top" src="<?php echo $row['image']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                <p class="card-text productBrand"><?php echo $row['brand']; ?></p>
                                <p class="card-text productCategory"><?php echo $row['category']; ?></p>

                                <p class="card-text"><?php echo $row['description']; ?></p>
                                <p class="card-text">£
                                    <span class="productPrice">
                                        <?php echo $row['price']; ?>
                                    </span> 
                                </p>
                                <a href="addtocart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "nothing to show";
            }
            ?> 

            </div>      

    </div>
</main>

<?php
include_once 'footer.php';
?>

