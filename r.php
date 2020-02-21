<?php
require_once("config.php");
global $connect;
$query="SELECT * FROM  percelinfo";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_array($result)){
    echo "<br>". $row[0];
}

?>
while($row=mysqli_fetch_assoc($result)){
   echo "<tr>
   <td>".$row['Courier_no']."</td>.<td>".$row['Percel_Weight']."</td>.<td>".$row['Payment']."</td>.
   <td>".$row['Place_to_Sent']."</td>.<td>".$row['Sending_date']."</td>.<td>".$row['Ariving_date']."</td><br>
   </tr>";
}


//$query="SELECT SUM(Payment) as pay FROM  percelinfo where Courier_no ='013'";




<?php
require_once("config.php");
global $connect,$payment,$weight,$city,$total;
$query="SELECT * FROM  percelinfo  where Courier_no ='013'";
$result=mysqli_query($connect,$query);
while($row=mysqli_fetch_array($result)){
  $city=$row['Place_to_Sent'];
  $weight=$row['Percel_Weight'];
  $payment=$row['Payment'];
}
if($city=='Jassor'){
   $total=($weight*$payment)+150;
}
echo $total;

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment</title>
</head>
<body>
   <header><h2>Generate Payment</h2></header>
   <form  class="example" action="total.php" method="post">
  <input type="text" placeholder="Enter Courier No.." name="percel">
  <button type="submit">Enter</button>
</form>
   
</body>
</html>
