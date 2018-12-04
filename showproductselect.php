<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>show product select result</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here is the order by change:</h1>
<ol>
<?php

   $orderby= $_POST["direction"];
   $wayb = $_POST["way"];
   $query = 'SELECT * FROM product ORDER BY "' . $wayb . '"  "' . $orderby . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
	        echo "product ID: ";
                echo $row["productID"];
                echo "      description: ";
                echo $row["description"];
                echo "      cost: ";
                echo $row["cost"];
                echo "      quantity: ";
                echo $row["quantity"] . "<li>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>

</ol>
</body>
</html>
