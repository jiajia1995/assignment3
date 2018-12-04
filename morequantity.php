<!DOCTYPE html>
<html>
    <!--jialin lin-->
    <head>
        <title>over quantity page</title>
        <link rel="stylesheet" type="text/css" href="customer.css">
    </head>

    <body>
       <?php
                include 'connectdb.php';
        ?>
         <h1> Over quantity Information </h1>
        <br>
        <br>
        <br>
        <hr>
        <h2>Here are customer who purchase more than on hand quantity:</h2>
        <ol>
        <?php
		
                $query = 'SELECT customer.firstN,customer.lastN,product.description,purchasInfo.quantity FROM purchasInfo LEFT JOIN customer ON purchasInfo.customerID = customer.customerID LEFT JOIN product ON product.productID = purchasInfo.productID WHERE product.quantity < purchasInfo.quantity';
                $result=mysqli_query($connection,$query);
                if (!$result) {
                        die("database query failed.");
                }
		if (mysqli_fetch_assoc($result)== NULL){
			echo" there has not any quantity had been purchase more than on hand!";
		}
                while ($row=mysqli_fetch_assoc($result)) {
		echo '<li>';
		echo "first name: ";
                 echo $row["firstN"];
                 echo "      last name: ";
                 echo $row["lastN"];
                 echo "      description: ";
                 echo $row["description"];
                 echo " ";
                 echo $row["quantity"];
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

