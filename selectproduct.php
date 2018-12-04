<!DOCTYPE html>
<html>
    <!--jialin lin-->
    <head>
        <title> Select Product Infomation</title>
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
        <form action="showproductselect.php" method="post">
	
	<br>
	<p>
	ORDER : 
	<input type="radio" name="direction" value="ASC">ascending 
	<input type="radio" name="direction" value="DESC"> descending<br>
	FOR :
	<input type="radio" name="way" value="cost">price
	<input type="radio" name="way" value="description"> description<br>
	<br>
	<input type = "submit" value=" change order ">

	</p>
        <br>
	</form>

        <?php
                include 'getproductselect.php';
        ?>


	<?php
		mysqli_close($connection);
	?>        
        
    </body>
</html>
