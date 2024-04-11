<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Restaurant-Orders on Date</title>
<link rel="stylesheet" type="text/css" href="gstyle.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are the Orders:</h1>
<table border=1 frame=hsides rules=rows>
<?php
   $dayOrders= $_POST["day"];
   $query = 'SELECT * FROM Employee join foodOrder join OrderContainsFood join CustomerAcct WHERE foodOrder.orderID = OrderContainsFood.OrderID AND Employee.EmployeeID = foodOrder.EmployeeID AND CustomerAcct.Email = foodOrder.CustEmail AND dateDelivered="' . $dayOrders . '"';
    //$query = 'SELECT foodName, totalPrice, tip, CustomerAcct.fName as cfName, CustomerAcct.lName as clName, Employee.fName as efName, Employee.lName as elName FROM Employee join foodOrder join OrderContainsFood WHERE foodOrder.orderID = OrderContainsFood.OrderID AND Employee.EmployeeID = foodOrder.EmployeeID AND dateDelivered="' . $dayOrders . '"';

   $result=$connection->query($query);
    while ($row=$result->fetch()) {
    echo "<tr><td>"."Customer Name: ". $row["cfName"]."</td><td>".$row["clName"]."</td><td>"."Food: ". $row["foodName"]."</td><td>"."Total Price: ".$row["totalPrice"]."</td><td>"."Tip: ". $row["tip"]."</td><td>"."Employee Name: ".$row["fName"]."</td><td>".$row["lName"]."</td></tr>";

	//echo "<tr><td>".$row["cfName"]."</td><td>".$row["clName"]."</td><td>".$row["foodName"]."</td><td>".$row["totalPrice"]."</td><td>".$row["tip"]."</td><td>".$row["efName"]."</td><td>".$row["elName"]."</td></tr>";
    }
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>