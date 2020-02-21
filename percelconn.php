<?php
require_once("config.php");
global $connect;
$sql="INSERT INTO percelinfo(Courier_no,Percel_Weight,Payment,Place_to_Sent,Sending_date,Ariving_date) 
VALUES('$_POST[courierno]','$_POST[pw]','$_POST[payment]','$_POST[city]','$_POST[sdate]','$_POST[adate]')";
if(mysqli_query($connect,$sql)){
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>