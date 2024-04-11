<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Restaurant-Employee Schedule</title>
<link rel="stylesheet" type="text/css" href="gstyle.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is the schedule:</h1>
<table border=1 frame=hsides rules=rows>
<?php
   $whichSched= $_POST["EmpSched"];
   $query = 'SELECT * FROM Employee, Shift WHERE Shift.EID = Employee.EmployeeID AND Shift.EID="' . $whichSched . '" AND NOT Day = "Saturday" AND NOT Day = "Sunday"';
   $result=$connection->query($query);
    while ($row=$result->fetch()) {
	echo "<tr><td>"."Date: ".$row["Day"]."</td><td>"."Start Time: ".$row["starttime"]."</td><td>"."End Time: ".$row["endtime"]."</td></tr>";
    }
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>