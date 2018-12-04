
<?php
   $query = "SELECT DISTINCT firstN,lastN  FROM combin ORDER BY lastN";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="petowners" value="';
        echo $row["firstN"];
        echo '">' . $row["firstN"] . " " . $row["lastN"] . "<br>";
   }
   mysqli_free_result($result);
?>
