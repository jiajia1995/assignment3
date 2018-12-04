<!DOCTYPE html>
<html>
    <!--jialin lin-->
    <head>
        <title>select customer</title>
        <link rel="stylesheet" type="text/css" href="customer.css">
    </head>
  
    <body>
	<?php
		include 'connectdb.php';
	?>
        <h1> Customer Information</h1>
        <br>
        <br>
        <hr>
        
	<form action="showcustomerdata.php" method="post">
	<?php
		include 'getselect.php';
	?>
	<br>
	<input type="submit" value="Get customer information">
	</form>
	<?php
		mysqli_close($connection);
	?>        
        <br>
        
    </body>
</html>
