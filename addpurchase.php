<!DOCTYPE html>
<html>
    <!--jialin lin-->
    <head>
        <meta charset = "utf-8">
	 <title>add customer infomation</title>
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
	<p>
	<p>
	<h2> ADD A NEW PURCAHSE:</h2>
	<form action="addpurchaseinfo.php" method="post">
	Enter customer ID: <input type="INT" name="customerid"><br>
	<br>
	New purchase productID : <input type="INT" name="productid"><br>
	<br>
	Quantity: <input type="INT" name="newpq"><br>
	<br>
	<input type="submit" value="Add New Purchase">
	</form>
	<?php
	mysqli_close($connection);
	?>
	</body>
	</html>




