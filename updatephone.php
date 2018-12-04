<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>update phone</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $ucid= $_POST["ucid"];
   $nphone = $_POST[newphone"];
$query = 'SELECT * FROM cusomter';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
	if ($row["customerID"] == $ucid){
		$updatep = 'UPDATE customer SET phone = "$nphone" WHERE customerID = "$ucid"';
		 if (!mysqli_query($connection, $updatep)) {
		        die("Error: insert failed" . mysqli_error($connection));
    		}
   		echo "	Update!";

	}
     }
     mysqli_free_result($result);
     mysqli_free_result($updatep);
   mysqli_close($connection);
?>
</ol>
</body>
</html>
