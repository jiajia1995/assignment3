<!DOCTYPE html>
<html>
    <!--jialin lin-->
    <head>
        <title>total purchase page</title>
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
        <h2>Here is product of total cost :</h2>
        <ol>
        <?php
		$tpid =  $_POST["totalpid"];
		$v = 0;
		$total = 0;
		$d = NULL;

		 $query = ' SELECT product.productID,product.description, purchasInfo.quantity FROM product LEFT JOIN purchasInfo ON product.productID = purchasInfo.productID';
                $result=mysqli_query($connection,$query);
                if (!$result) {
                        die("database query failed.");
                }		
		
                while ($row=mysqli_fetch_assoc($result)) {
			if ($row["productID"] == $tpid){
				$d = $row["description"];
				$tq = $row["quantity"];		
                		$total = intval($tq) + intval($total);
				$v ++;
			}
                }
		if ($v == 0){
			echo "invaild product ID.";
		}
		else{
			 echo '<li>';
				echo $d;
				echo "<br>";
                                echo "product quantity: ";
                                echo $total;
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

