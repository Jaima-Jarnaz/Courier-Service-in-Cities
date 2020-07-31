<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <title>View Percel Info</title>
    <style>
      .div1{
  background-color:#171111;
  padding: 20px;
  width: 70%;
   margin: auto;
   margin-top: 10px;
}
  </style>
</head>
<body>
  <div class="div1 table-responsive">
<h1 class="h1 text-white text-center">Truck Information</h1>
<table class="table table-striped container text-white">
  <thead>
  <tr>
    <th>Truck_ID</th>
    <th>Driver Name </th>
    <th>Destination</th>
    <th>Sending Date</th>
    <th>Action</th>
  </tr>
  </thead>
<?php
require_once("config.php");
global $connect;
$query="SELECT * FROM  truckinfo";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result)){
   echo "<tr>
   <td>".$row['Truck_ID']."</td>
   <td>".$row['Driver_Name']."</td>
   <td>".$row['Destination']."</td>
   <td>".$row['Sending_date']."</td>
   <td><a href =truck_info_delete.php?Truck_ID=".$row["Truck_ID"].">Delete</a>
   <a href =edit_courier_info.php?Truck_ID=".$row["Truck_ID"].">Edit</a></td>
   <br>
   </tr>";
}
echo "</table>";
?>
<div class="clearfix">
    <a class="btn btn-primary float-right mr-2" href="view_percel_info.php">Print</a>
    <a class="btn btn-primary float-right mr-2" href="home.html">Back</a>
  </div><br>
</div>
</div>
</body>
</html>
