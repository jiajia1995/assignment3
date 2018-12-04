<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your pets:</h1>
<ol>
<?php
   $vaild = 0;
   $whichOwner= $_POST["cid"];
   $query = 'SELECT * FROM customer';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
	
    while ($row=mysqli_fetch_assoc($result)) {
	if ($row["customerID"] == $whichOwner ){
        $vaild ++;
	echo '<li>';
        echo $row["customerID"];
	}
     }
    if ($vaild == 0){
	echo "ffff";
	}
	
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
