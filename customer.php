<!DOCTYPE html>
<html>
    <!--jialin lin-->
    <head>
        <title>customer infomation</title>
        <link rel="stylesheet" type="text/css" href="customer.css">
    </head>
  
    <body>
       	<?php
		include 'connectdb.php';
	?>

	 <h1> Customer Information</h1>
        <br>
        <br>
        <hr>
        
        <!-- this is the dropdown box for select-->
        <div class="dropdown">
        <button class="choose">Select</button>
            <div id="content">
                <a href="selectcustomer.php">Show customer information</a>
                <a href="addcustomerform.php">add customer</a>
                <a href="addpurchase.php">update customer</a>
		<a href = "delectcustomerform.php"> delect customer</a>                
            </div>
        </div>
        
        <br>
        
	<?php
		include 'getcustomer.php';
	?>

    </body>
</html>
