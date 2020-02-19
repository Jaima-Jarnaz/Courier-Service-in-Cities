<?php
require_once('config.php');
function checkusername($username){
    global $connect;
    $sql="SELECT * from 'admin' where username ='$username'";
    $result=mysqli_query($connect,$sql);
    $count=mysqli_num_rows($result);
	return $count;
}
if($_SERVER['REQUEST_METHOD']!="POST"){
    header("Location:login.php");
}
else{
    $username=$_POST['uname'];
    //$password=$_POST['psw'];
    if($username==$username){
        $_SESSION['username']=$username;
        header("Location:index.php");
        var_dump($_SESSION);
    }
    else{
        die("Wrong email or password");
    }
}

?>