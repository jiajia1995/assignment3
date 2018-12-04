<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>addpurchaseinfo</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1> Customer Information</h1>
<br>
<br>
<hr>
<ol>
<?php

   $cid= $_POST["customerid"];
   $pid= $_POST["productid"];
   $nq = $_POST["newpq"];
   $v = 0;
   $v2 = 0;
   $hadpp = 0;
   
   //check if the customer ID is exiting
   $query1 = 'SELECT * FROM customer';
   $result1=mysqli_query($connection,$query1);
    if (!$result1) {
         die("database query2 failed.");
     }
    while ($row1 = mysqli_fetch_assoc($result1)) {
	if ($row1["customerID"] == $cid){
		$v ++;
	}
     }
	//if the cid is not exsiting
	if($v == 0){
	   die ("invaild cid");
	}

   //check if the product ID is exsting
   $query2 = 'SELECT * FROM product';
   $result2=mysqli_query($connection,$query2);
    if (!$result2) {
         die("database query2 failed.");
     }
    while ($row2 = mysqli_fetch_assoc($result2)) {
        if ($row2["productID"] == $pid){
                $v2 ++;
        }
     }
	//if the pid is not exsting
    if ($v2 == 0){
	die("invaid pid");
	}

	//adding data into purchasInfo
   $query3 = 'SELECT * FROM purchasInfo';
   $result3=mysqli_query($connection,$query3);
    if (!$result3) {
         die("database query2 failed.");
     }
	
	//if the customer had purchase this product before then just adding the quantity
    while ($row3 = mysqli_fetch_assoc($result3)) {
        if ($row3["productID"] == $pid){
		if ($row3["customerID"] == $cid){
                	$hadpp ++;
			$qq = $row3["quantity"];
			$total = intval($qq) + intval($nq);
			$addproduct = 'UPDATE  purchasInfo SET quantity = "' . $total . '" WHERE purchasInfo.customerID = "' . $cid . '" AND purchasInfo.productID = "' . $pid . '"';
		 	if (!mysqli_query($connection, $addproduct)) {
                		die("Error: insert failed" . mysqli_error($connection));
         		}else{
				echo " quantity : ";
				echo $total;
				echo "<br>";
				echo "Your purchase was added!<br>";
			}
		}
        }
     }
	//if customer does not purchase this before
    if ($hadpp == 0){
	$setfk = 'SET FOREIGN_KEY_CHECKS=0';
        $addproduct = 'INSERT INTO purchasInfo(customerID,quantity,productID) VALUE("' . $cid . '","' . $nq . '","' . $pid  . '")'; 
	if (!mysqli_query($connection, $addproduct)) {
		$setfk = 'SET FOREIGN_KEY_CHECKS=1';
        	die("Error: insert failed" . mysqli_error($connection));
   	 }else{
  		 echo "Your purchase was added 2!";
		$setfk = 'SET FOREIGN_KEY_CHECKS=0';
		}
        }




     mysqli_free_result($result1);
     mysqli_free_result($result2);
     mysqli_free_result($result3);     
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
