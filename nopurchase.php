<!DOCTYPE html>
<html>
    <!--jialin lin-->
    <head>
        <title>non purchase page</title>
        <link rel="stylesheet" type="text/css" href="customer.css">
    </head>

    <body>
       <?php
                include 'connectdb.php';
        ?>
         <h1> Product Information </h1>
        <br>
        <br>
        <br>
        <hr>
        <h2>Here are product had never been purchased:</h2>
        <ol>
        <?php

                $query = ' SELECT DISTINCT product.productID,product.description,purchasInfo.productID FROM product LEFT JOIN purchasInfo ON product.productID = purchasInfo.productID WHERE purchasInfo.productID IS NULL';
                $result=mysqli_query($connection,$query);
                if (!$result) {
                        die("database query failed.");
                }
		 if (mysqli_fetch_assoc($result)== NULL){
                        echo" there has not any product had been non purchase!";
                }

                while ($row=mysqli_fetch_assoc($result)) {
                	
		echo '<li>';
                echo "product name: ";
                 echo $row["description"];
                 echo " ";
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

