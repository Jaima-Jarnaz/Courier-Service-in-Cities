<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Percel Info</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
<h1 class="h1 text-center text-white">Courier Information</h1>
<table class="container table text-white table-striped w-50">
  <thead>
  <tr>
    <th>Courier_no</th>
    <th>Percel_Weight</th>
    <th>Payment</th>
    <th>Place_to_Sent</th>
    <th>Sending_date</th>
    <th>Ariving_date</th>
    <th>Action</th>

  </tr>
  </thead>

<?php
require_once("config.php");
global $connect;
$query="SELECT * FROM  percelinfo";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result)){
   echo "<tr>
   <td>".$row['Courier_no']."</td>
   <td>".$row['Percel_Weight']."</td>
   <td>".$row['Payment']."</td>
   <td>".$row['Place_to_Sent']."</td>
   <td>".$row['Sending_date']."</td>
   <td>".$row['Ariving_date']."</td>
   <td><a href =delete_courier_info.php?Courier_no=".$row["Courier_no"].">Delete</a></td>
   <td><a href =edit_courier_info.php?Courier_no=".$row["Courier_no"].">Edit</a></td>
   </tr>";
}
echo "</table>";
?>
 <div class="clearfix">
    <a class="btn btn-primary float-right mr-2" href="view_percel_info.php">Print</a>
    <a class="btn btn-primary float-right mr-2" href="home.html">Back</a>
  </div><br>
</div>
</body>
</html>
