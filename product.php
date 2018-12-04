<!DOCTYPE html>
<html>
    <!--jialin lin-->
    <head>
        <title> Product Infomation</title>
        <link rel="stylesheet" type="text/css" href="product.css">
    </head>
  
    <body>
	<?php
		include 'connectdb.php';
	?>
        <h1> Product Information</h1>
        <br>
        <br>
        <hr>
        
        <!-- this is the dropdown box for select-->
        <div class="dropdown">
        <button class="choose">Select</button>
            <div id="content">
                <a href="selectproduct.php">All product</a>
                <a href="nopurchase.php">never been purchased product</a>
                <a href="morequantity.php">more than on hand product</a>
            </div>
        </div>
        
        <br>
        <p>
	</p>
    </body>
</html>
