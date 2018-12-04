<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>delect customer</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $ocid= $_POST["oldcid"];

   $query = "SELECT * FROM customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)){
        if ($row["customerID"] == $ocid){
		$delectc = 'DELETE FROM customer  WHERE customer.customerID = "' . $ocid . '"';
		if (!mysqli_query($connection, $delectc)) {
		        die("Error: delect failed" . mysqli_error($connection));
   		 }
   		echo "Customer delect!!!!";

                }
        }


  mysqli_free_result($result);
   mysqli_close($connection);
?>
</ol>
</body>
</html>

