<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delect customer form</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Customer Information</h1>
<br>
<br>
<p>
<hr>
<p>
<h2> DELECT CUSTOMER:</h2>
<form action="delectcustomer.php" method="post">
Customer ID: <input type="INT" name="oldcid"><br>
<br>
<input type="submit" value="Add New Pet">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>

