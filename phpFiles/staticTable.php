
<?php
   $query = "select dateDelivered, count(orderID) as orderCount
            from foodOrder
            group by dateDelivered";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo "<tr><td>" ."Date Delivered: ". $row["dateDelivered"] ." ". "</td><td>"."Number of Orders: ". $row["orderCount"] . "</td></tr>";
   }
?>

