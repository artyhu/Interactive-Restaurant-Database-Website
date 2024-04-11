<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Restaurant-Your Customers</title>
<link rel="stylesheet" type="text/css" href="gstyle.css">
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   //$whichOwner= $_POST["petowners"];
   //$petName = $_POST["petname"];
   //$species =$_POST["species"];
   //$query1= 'select max(petid) as maxid from pet';
   //$result= $connection->query($query1);
   //$row=$result->fetch();
   //$newkey = intval($row["5"]);
   //$CreditAmount = (string)$newkey;
    $email= $_POST["Email"];
    $first= $_POST["cfName"];
    $last= $_POST["clName"];
    $pNum= $_POST["Phone"];
    $street= $_POST["Street"];
    $city= $_POST["City"];
    $Postal= $_POST["PC"];
    $query1= 'select * from CustomerAcct where Email="' . $email . '"';
    $result= $connection->query($query1);
    $numRows= $result->rowCount();
    if ($numRows > 0){
        echo "Customer Account already exists!";
    }
    else {
   $query2 = 'INSERT INTO CustomerAcct values("' . $email . '","' . $first . '","' . $last . '","' . $pNum . '","' . $street . '","' . $city . '","' . $Postal . '","' . 5 . '")';
   $numRows = $connection->exec($query2);
   echo "Your CustomerAcct was added!";
    }
   $connection = NULL;
?>
</ol>
</body>
</html>