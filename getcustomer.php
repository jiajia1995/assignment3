<?php
$query = "SELECT * FROM customer ORDER BY lastN ASC";
$result = mysqli_query($connection,$query);
if (!$result){
        die("databases query faild.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)){
        echo "<li>";
	echo "customer ID :  ";
        echo $row["customerID"];
        echo "      first name: ";
        echo $row["firstN"];
        echo "      last name: ";
        echo $row["lastN"];
        echo "      city: ";
        echo $row["city"];
        echo "      phone:";
        echo $row["phone"] . "<li>";
}

mysqli_free_result($result);
echo "</ol>";
?>
