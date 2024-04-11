<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Restaurant</title>
<link rel="stylesheet" type="text/css" href="gstyle.css">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to The Restaurant!</h1>
<img src='https://assets.entrepreneur.com/content/3x2/2000/1645822504-GettyImages-1370781946.jpg' width="200" height="150"/>
<img src='https://brocku.ca/brock-news/wp-content/uploads/2019/01/Pizza-Pizza-RS-1600x1200.jpg?x70330' width="200" height="150"/>
<img src='https://static1.squarespace.com/static/5be8b92df79392b1e4eb05c1/5c2d814e2b6a28315994d363/5c2d9cc9758d46dc8b125bc9/1546493197575/Capture.PNG?format=1500w' width="200" height="150"/>
<img src='https://www.eatthis.com/wp-content/uploads/sites/4/2021/06/mcdonalds-2.jpg?quality=82&strip=1' width="200" height="150"/>
<img src='https://www.foodandwine.com/thmb/cn3qL7l-3qkAMduagUemgUQKtA8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/arbys-plant-based-meats-FT-BLOG0519-1edf2e20c5844b3bbbd7502b8513fa5d.jpg' width="200" height="150"/>
<img src='https://www.kingstonist.com/wp-content/uploads/2020/11/ca_images_Tim_Hortons_Exterior_2_edited.jpg' width="200" height="150"/>


<h2>See Total Orders of Date:</h2>
<form action="getOrders.php" method="post">
<?php
include 'getOD.php';
?>
<input type="date" value="<?php echo date('Y-m-d'); ?>">
<input type="submit" value="Get Orders"/>
</form>
<p>
<hr>
<p>
<h2>See Employee Schedules:</h2>
<form action="getEmpSched.php" method="post">
<?php
include 'pgetdata.php';
?>
<input type="submit" value="Get Schedule">
</form>
<p>
<hr>
<p>
<h2> ADD A NEW CUSTOMER:</h2>
<form action="addnewcustomer.php" method="post">
New Customers Email: <input type="text" name="Email"><br>
New Customers First Name: <input type="text" name="fName"><br>
New Customers Last Name: <input type="text" name="lName"><br>
New Customers Phone Number: <input type="text" name="Phone"><br>
New Customers Street: <input type="text" name="Street"><br>
New Customers City: <input type="text" name="City"><br>
New Customers Postal Code: <input type="text" name="PC"><br>

<input type="submit" value="Add New Customer Account">
</form>
<p>
<hr>
<p>
<h2>Table: Total Number of Orders on a Date</h2>
<table border=1 frame=hsides rules=rows>
<?php
include 'staticTable.php';
?>
</table>

<?php
$connection =- NULL;
?>

</body>