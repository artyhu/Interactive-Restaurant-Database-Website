<?php
   $query = "SELECT * FROM Employee";
   $result = $connection->query($query);
   echo "Which Employee's schedule would you like to see? </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="EmpSched" value="';
        echo $row["EmployeeID"];
        echo '">' . $row["fName"] . " " . $row["lName"] . "<br>";
   }
?>