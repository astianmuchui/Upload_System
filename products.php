       <?php
        require "functions.php";
        
  ?>
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Upload system</title>
    </head>
    <body>
        <center>
        <form action="products.php" method="post" enctype="multipart/form-data">
            <label>Product name</label> <br>
            <input type="text" name="product_name"> <br>

            <label for="price">Product Image</label> <br>
            <input type="file" name="product_image"> <br>
            <br>
        
            <input type="submit" value="Upload" name="submit">
        </form>
        </center>
        <style>
            input{
                width: 30%;
                height: 50px;
            }
            label{
                font-size: 30px;
                font-family: 'arial','helvetica','sans-serif,'-apple-system',;
            }
        </style>

        <div class="products">
            <div>
                <img src="images/belt.jpg" alt="">
                <p>belts</p>
            </div>
            <div>
            <?php foreach($products as $product): ?>
                                    
        

                <p><?php echo $product['product_name'];?> </p>
                <?php endforeach ?>
            </div>
        </div>
    </body>
    </html>


