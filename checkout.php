<?php
include_once 'header.php';
?>


<main class="flex-shrink-0">
    <div class="container mt-5">
        <!-- contact form -->
        <div class="row justify-content-center">
            <h2 class="mt-5">Checkout:</h2>
        </div>
        <div class="row mt-5">
            <div class="row justify-content-center card card-body shadow col-md-6">
                <form action="order.php" method="post">
                    <div class="form-group mt-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary mt-3" value="Order">
                </form>
            </div>
            
        </div>
</main>

<?php
include_once 'footer.php';
?>