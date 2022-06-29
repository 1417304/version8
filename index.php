<?php
include_once 'header.php';
include_once 'db.php';
?>

<?php
$sql = "SELECT * FROM products";
$result = $conn->query($sql);



?>

<main class="flex-shrink-0">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="row justify-content-center">
                    <h2 class="text-center">Welcome To YOUR STYLE</h2>
                </div>
                <div class="row text-center py-5" id="productContainer">


                    <div id="content">
                        <table width="100%" border="0" cellspacing="3" cellpadding="3">
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><a href="products.php?category=men"><img src="assets/Images/men/jacket1.jpg" alt="box" width="100" height="400" hspace="10" align="left" class="imgleft" title="Jackets"></a></p>
                                    </td>
                                    <td>
                                        <p><a href="products.php?category=women"><img src="assets/Images/women/dress3.jpg" alt="box" width="100" height="400" hspace="10" align="left" class="imgleft" title="Dresses"></a></p>
                                    </td>
                                    <td>
                                        <p><a href="products.php?category=accessories"><img src="assets/Images/accessories/bag3.jpg" alt="box" width="100" height="400" hspace="10" align="left" class="imgleft" title="Accessories"></a></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="26" bgcolor="#BCE0A8">
                                        <div align="center" class="style9"><a href="men.php">Jackets</a></div>
                                    </td>
                                    <td bgcolor="#BCE0A8">
                                        <div align="center" class="style9"><a href="women.php">Dresses</a></div>
                                    </td>
                                    <td bgcolor="#BCE0A8">
                                        <div align="center" class="style9"><a href="Accessories.php">Accessories</a></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once 'footer.php';
?>
