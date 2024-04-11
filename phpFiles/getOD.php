
<?php
   $query = "SELECT * FROM foodOrder";
   $result = $connection->query($query);
   echo "Which Employee's schedule would you like to see? </br>";
   while ($row = $result->fetch()) {
        echo '<input type="date" name="day" value="';
        echo $row["EmployeeID"];
   }
?>