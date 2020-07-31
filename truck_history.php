<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Truck History</title>
   <style>
        .mid_container{
    background-color: #9e9e9e2e;
    padding: 40px;
    width: 70%;
    margin: auto;
    margin-top: 15px;
    padding-bottom: 30%;
    border-style: hidden;
    text-align: center;
    }
    .pay_bar{
      width: 70%;
    margin: auto;
    }
    .pay_bar input{
      width: 55%;
    padding: 8px;
    margin: auto;
    font-size: large;
    font-family: inherit;
    border-style: groove;
    }
    .pay_bar button{
      width: 15%;
    padding: 8px;
    margin: auto;
    font-size: large;
    font-family: inherit;
    border-style: groove;
    background-color: #6139dc;
    color: aliceblue;
    }
    table {
    border-collapse: collapse;
    width: 73%;
    margin: auto;
    margin-top: 60px;
}

th, td {
    padding: 30px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
   </style>
</head>
<body>
<div class="mid_container">
<?php
require_once("config.php");
global $sending,$date,$truckid,$ariving;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["field1"])) {
   echo "Truck No is required...";
   } else {
      $truckid=$_POST["field1"];
     }
   }
$query="SELECT * FROM  truckinfo  where Truck_ID ='truckid'";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_array($result)){
  $truckid=$row['Truck_ID'];
  //$sending=$row['Sending_date'];
}
$date=date_create($row['Sending_date']);
date_add($date,date_interval_create_from_date_string("1 days"));
 $ariving=date_format($date,"y-m-d");

echo "<table>
  <th>Truck ID No</th>
  <th>Sending Date</th>
  <th>Ariving Date</th>";
echo "<tr><td>".$truckid."</td><td>".$row['Sending_date']."</td><td>".$ariving."</td></tr>";
echo "</table>";
?>
</div>
   </body>
   </html>