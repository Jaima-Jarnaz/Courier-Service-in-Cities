<?php
require_once("config.php");
global $connect;
mysqli_select_db($connect,'courier_db');
$sql="DELETE FROM percelinfo WHERE Courier_no='$_GET[Courier_no]'";
if(mysqli_query($connect,$sql))
     header("refresh:1;url=successful_delete.html");
else 
    include("message_view_delete.html");
?>