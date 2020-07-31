<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   <title>Payment</title>
   <style>
      .div1{
        background-color: #171111;
    padding: 75px;
    width: 64%;
    margin: auto;
    margin-top: 40px;
}
    </style>
</head>
<body>
<div class="div1 table-responsive">
<table class="container table  table-striped w-75 text-white">
  <thead class="">
  <th>Courier No</th>
  <th>Sent To</th>
  <th>Ariving Date</th>
  <th>Payment</th>
  <th>Total Amount </th>
  </thead>
<?php
require_once("config.php");
global $connect,$payment,$weight,$city,$total,$courier,$date;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["courierno"])) {
   echo "Courier No is required...";
   } else {
      $courier=$_POST["courierno"];
     }
   }
$query="SELECT * FROM  percelinfo  where Courier_no ='$courier'";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_array($result)){
  $city=$row['Place_to_Sent'];
  $weight=$row['Percel_Weight'];
  $payment=$row['Payment'];
  $date=$row['Ariving_date'];
}
if($city=='Barishal'){
  $total=($weight*$payment)+300;
}
elseif($city=='Chittagong'){
  $total=($weight*$payment)+200;
}
elseif($city=='Mymensingh'){
  $total=($weight*$payment)+100;
}
elseif($city=='Khulna'){
  $total=($weight*$payment)+200;
}
elseif($city=='Rajshahi'){
  $total=($weight*$payment)+250;
}
elseif($city=='Rangpur'){
  $total=($weight*$payment)+250;
}
elseif($city=='Sylhet'){
   $total=($weight*$payment)+350;
}
else{
  die("Record not find");
}
echo "<tr>
<td>".$courier."</td>
<td>".$city."</td>
<td>".$date."</td>
<td>".$payment."</td>
<td>".$total."</td>
</tr>";
echo "</table>";
?>
</div>
 </body>
 </html>