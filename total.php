<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment</title>
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
      width: 30%;
    }
    .pay_bar input{
      width: 50%;
      padding:12px;
      margin:auto;
      

    }
   </style>
</head>
<body>
<div class="mid_container">
   <h2>Generate Payment</h2>
   <form  class="pay_bar"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <input type="text" placeholder="Enter Courier No.." name="courierno">
  <button type="submit">Enter</button>
</form>


<?php
require_once("config.php");
global $connect,$payment,$weight,$city,$total,$courier;
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
}
if($city=='Jassor'){
   $total=($weight*$payment)+150;
}
echo $total;
?>
</div>
   
</body>
</html>