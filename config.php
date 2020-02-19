<?php
$hostname="localhost";
$user="root";
$passwd="";
$db_name="courier_db";
$connect=mysqli_connect("localhost","root","","courier_db");
if(!$connect){
    die("Unable to connect...".mysqli_connect_error());
}
?>