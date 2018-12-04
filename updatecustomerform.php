<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>update customer form</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<p>
<hr>
<p>
<h2> Update phone number:</h2>
<form action="showphone.php" method="post">
customer ID: <input type="text" name="ucid"><br>
<br>
<input type="submit" value="update">
</form>


<?php
mysqli_close($connection);
?>
</body>
</html>
