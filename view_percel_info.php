<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Percel Info</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 75%;
  margin:auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h1{text-align:center;}
</style>
</head>
<body>
<h1>Qourier Information</h1>
<?php
require_once("config.php");
global $connect;
$query="SELECT * FROM  percelinfo";
$result=mysqli_query($connect,$query);
echo "<table>
  <tr>
    <th>Courier_no</th>
    <th>Percel_Weight</th>
    <th>Payment</th>
    <th>Place_to_Sent</th>
    <th>Sending_date</th>
    <th>Ariving_date</th>
  </tr>";
while($row=mysqli_fetch_assoc($result)){
   echo "<tr><td>".$row['Courier_no']."</td><td>".$row['Percel_Weight']."</td><td>".$row['Payment']."</td>
   <td>".$row['Place_to_Sent']."</td><td>".$row['Sending_date']."</td><td>".$row['Ariving_date']."</td><br></tr>";
}
echo "</table>";

?>
</body>
</html>
