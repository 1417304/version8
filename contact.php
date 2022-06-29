<?php
include_once 'header.php';
include_once 'db.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);
    
        echo "
            <script>
            alert('Contact added successfully');
            window.location.href='index.php';
            </script>
            "; 
}
?>


<main class="flex-shrink-0">
    <div class="container mt-5">
        <!-- contact form -->
        <div class="row justify-content-center">
            <h2 class="mt-5">Contact Us:</h2>
        </div>
        <div class="row mt-5">
            <div class="row justify-content-center card card-body shadow col-md-6">
                <form action="contact.php" method="post">
                    <div class="form-group mt-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary mt-3" value="Submit">
                </form>
            </div>
            <div class="row text-center py-5 col-md-6">
                <div class="col-md-12  p-3">
                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Address:</span>
                        <br>
                        <span>University of Wolverhampton</span>
                        <br>
                        <span>Wulfruna Street</span>
                        <br>
                        <span>Wolverhampton</span>
                        <br>
                        <span>West Midlands</span>
                        <br>
                        <span>WV1 1LY</span>
                    </p>
                    <p>
                        <i class="fas fa-phone"></i>
                        <span>Phone:</span>
                        <br>
                        <span>01902 323500</span>
                    </p>
                    <p>
                        <i class="fas fa-envelope"></i>
                        <span>Email:</span>
                        <br>
                        <span>
                            <a href="UOW@wlv.ac.uk">
                                 UOW@wlv.ac.uk
                            </a>
                        </span>
                    </p>
    
    
    
                </div>
            </div>
        </div>
</main>

<?php
include_once 'footer.php';
?>
