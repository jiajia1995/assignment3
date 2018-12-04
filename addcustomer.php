<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>add customer</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $ncid= $_POST["newcid"];
   $nFN = $_POST["newFN"];
   $nLN =$_POST["newLN"];
   $city = $_POST["city"];
   $phone = $_POST["phone"];

   $query = "SELECT * FROM customer";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)){
	if ($row["customerID"] == $ncid){
		die("The customer ID exiting.");
		}
	}

   $addc = 'INSERT INTO customer  values("' . $ncid . '","' . $nFN . '","' . $nLN . '","' . $city . '","' . $phone . '")';
   if (!mysqli_query($connection, $addc)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "New customer add!!!!";

  mysqli_free_result($result);
   mysqli_close($connection);
?>
</ol>
</body>
</html>
