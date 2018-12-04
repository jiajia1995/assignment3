<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>show phone</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>

<h2>customer old phone number :</h2>
<ol>
<?php
   $v = 0;
   $ucid= $_POST["ucid"];
    $query = 'SELECT * FROM customer';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
	if($row["customerID"] == $ucid){
        echo '<li>';
        echo $row["phone"];
	$v ++;
	}
     }
    if ($v == 0){
	die ("customer ID does not exit.");
	}

     mysqli_free_result($result);

?>
</ol>

<br>
<br>
<hr>

<h2>Update phone: </h2>
<form action="updatephone.php" method="post">
New Phone(xxx-xxxx): <input type="text" name="newphone"><br>

<br>
<input type="submit" value="Add New Pet">
</form>
</body>
</html>
