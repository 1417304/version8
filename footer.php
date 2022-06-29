<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">
            <p>&copy; 2022 YOUR STYLE</p>
        </span>
    </div>
</footer>
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#category').change(function(e) {
            e.preventDefault();
            var category = $(this).val(); 
            if(category ==''){
                $('#productContainer').find('.productCategory').each(function() {
                    $(this).parent().parent().parent().show();
                });
            }else{
                $('#productContainer').find('.productCategory').each(function() {
                    if($(this).text() != category){
                        $(this).parent().parent().parent().hide();
                    }else{
                        $(this).parent().parent().parent().show();
                    }
                });
            }
             
        });

        $('#search').keyup(function(e) { 
            e.preventDefault();
            var search = $(this).val(); 
            $('#productContainer').find('.productName').each(function() {
                if ($(this).text().toLowerCase().includes(search.toLowerCase())) { 
                    $(this).parent().parent().parent().show();
                } else {
                    $(this).parent().parent().parent().hide();
                }
                                  
            });
        });

        $('#brand').change(function(e) {
            e.preventDefault();
            var brand = $(this).val(); 
            if (brand == '') { 
                $('#productContainer').find('.productBrand').each(function() {
                    $(this).parent().parent().parent().show();
                });
            } else {
                $('#productContainer').find('.productBrand').each(function() {
                    if ($(this).text() == brand) { 
                        $(this).parent().parent().parent().show();
                    } else {
                        $(this).parent().parent().parent().hide();
                    }
                                  
                });
            }
             
        });

        $('#price').change(function(e) {
            e.preventDefault();
            var price = $(this).val();  
            var max = price.split('-')[1];
            var min = price.split('-')[0]; 
            
            if (price == '') { 
                $('#productContainer').find('.productPrice').each(function() {
                    $(this).parent().parent().parent().show();
                });
            } else {
                $('#productContainer').find('.productPrice').each(function() {
                    if (parseInt($(this).text()) <= max && parseInt($(this).text()) >= min) { 
                        $(this).parent().parent().parent().show();
                    } else {
                        $(this).parent().parent().parent().hide();
                    }
                                  
                });
            } 
           
             
        });

    });
    
</script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "'" . $row['name'] . "',";
            }
        }
        
        ?>
       
    ];
    $( "#search" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
</body>

</html>
