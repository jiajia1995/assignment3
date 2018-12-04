<?php

	$query = "SELECT * FROM product";
	$result = mysqli_query($connection,$query);
	if (!$result){
        	die("databases query faild.");
	}

	while ($row = mysqli_fetch_assoc($result)){
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
echo "</ol>";

?>
