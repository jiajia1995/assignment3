<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>total purcahse form</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Product Information</h1>
<p>
<hr>
<p>
<h2>Which product you are looking for:</h2>
<form action="totalpurchase.php" method="post">
Product ID: <input type="text" name="totalpid"><br>
<input type="submit" value="caculate">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>
