<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css"> 
   <title>Payment</title>
   <style>
   .container-style{
    width: 55%;
    margin: auto;
    border: 1px solid #03A9F4;
    padding: 125px;
    margin-top: 30px;
    box-shadow: 10px 10px 5px grey;
   }
   @media(max-width:992px){
    div.container-style{
    padding:100px;
    width:90%;
   }
   h2{
     font-size:22px;
     color:green;
   }
   button.btn{
     width:50px;
     color:white;
     font-size:15px;
   }
   }


   @media(max-width:575px){
    div.container-style{
    padding:100px;
    width:90%;
   }
   h2{
     font-size:20px;
     color:green;
   }
   button.btn{
     width:40px;
     color:black;
     font-size:12px;
   }
   }
   </style>
</head>
<body>
<div class="container-style">
  <div class="">
   <h2 class="mb-3">Generate Payment</h2>
   <form   class="form-inline"  method="post" action="total.php">
  <input class="form-control form-control-sm w-75 mr-2" type="text" placeholder="Enter Courier No.." name="courierno">
  <button class="btn btn-primary btn-sm" type="submit" value="submit">Enter</button>
</form>
</div>
</div>
   
</body>
</html>