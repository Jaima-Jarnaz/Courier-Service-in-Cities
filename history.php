<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
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
      width: 70%;
    margin: auto;
    }
    .pay_bar input{
      width: 55%;
    padding: 8px;
    margin: auto;
    font-size: large;
    font-family: inherit;
    border-style: groove;
    }
    .pay_bar button{
      width: 15%;
    padding: 8px;
    margin: auto;
    font-size: large;
    font-family: inherit;
    border-style: groove;
    background-color: #6139dc;
    color: aliceblue;
    }
   </style>
</head>
<body>
<div class="mid_container">
   <h2>Truck Schedule</h2>
   <form  class="pay_bar"  method="post" action="truck_history.php">
  <input type="text" placeholder="Enter Truck No.." name="field1">
  <button type="submit" value="submit">Enter</button>
</form>
</div>
   
</body>
</html>