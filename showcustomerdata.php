<!DOCTYPE html>
<html>
    <!--jialin lin-->
    <head>
        <title>customer infomation</title>
        <link rel="stylesheet" type="text/css" href="customer.css">
    </head>
  
    <body>
       <?php
		include 'connectdb.php';
	?>
	 <h1> Customer Information </h1>
        <br>
	<br>
	<br>
	<hr>        
	<h2>Here are customer information:</h2>
	<ol>
	<?php
   		$whichOwner= $_POST["petowners"];
		$v = 0;
		//this is show what the customer ahd purchase
   		$query = 'SELECT customer.firstN,customer.lastN,product.description,purchasInfo.quantity FROM customer LEFT JOIN purchasInfo ON customer.customerID = purchasInfo.customerID LEFT JOIN product ON product.productID = purchasInfo.productID ';
   		$result=mysqli_query($connection,$query);
    		if (!$result) {
         		die("database query2 failed.");
     		}
    		while ($row=mysqli_fetch_assoc($result)) {
			if ($row["firstN"] == $whichOwner){
        			echo '<li>';
		 		echo $row["firstN"];
                 		echo " ";
                 		echo $row["lastN"];
                 		echo " ";
                 		echo $row["description"];
                 		echo " ";
                 		echo $row["quantity"];
                 		echo " ";
                		echo $row["cost"];
				$v ++;
			}
    		}
		if ( $v == 0){
			echo "Does not purchase anything.";
		}
     		mysqli_free_result($result);
		?>
	</ol>
	<?php
   		mysqli_close($connection);
	?>

        <br>
        
    </body>
</html>
