<?php
require_once("config.php");
global $connect;
$sql="INSERT INTO truckinfo(Truck_ID,Driver_Name,Destination,Sending_date) 
VALUES('$_POST[field1]','$_POST[field2]','$_POST[field3]','$_POST[field4]')";
if(mysqli_query($connect,$sql)){
  include("truck_info_saved_message.html");
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>