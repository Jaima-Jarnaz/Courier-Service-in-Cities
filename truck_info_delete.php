<?php
require_once("config.php");
global $connect;
mysqli_select_db($connect,'courier_db');
$sql="DELETE FROM truckinfo WHERE Truck_ID='$_GET[Truck_ID]'";
if(mysqli_query($connect,$sql))
     header("refresh:1;url=truck_delete_successfull.html");
else 
    include("message_view_delete.html");
?>