<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add customer form</title>
<link rel="stylesheet" type="text/css" href="customer.css">
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
<h2> ADD A NEW CUSTOMER:</h2>
<form action="addcustomer.php" method="post">
New Customer ID: <input type="INT" name="newcid"><br>
<br>
First Name: <input type = "text" name = "newFN"><br>
<br>
Last Name: <input type = "text" name = "newLN"><br>
<br>
City: <input type = "text" name = "city"><br>
<br>
Phone(xxx-xxxx): <input type = "text" name = "phone"><br>
<br>
<input type="submit" value="Add New Pet">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>
