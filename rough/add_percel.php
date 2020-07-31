<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Percel Information</title>
    <style>
          input[type=text],input[type=date], select {
            width: 40%;
            padding: 13px 13px;
            margin: 12px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
          }
          
          input[type=submit] {
            width: 20%;
            background-color: #593fec;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
          }
          
          input[type=submit]:hover {
            background-color: #45a049;
          }
         
          label{
            font-weight: inherit;
            margin: 3px;

          }


      .button{
    width: 20%;
    background-color: #593fec;
    color: white;
    padding: 30px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration:none;
      }
      
      .button:hover {
        background-color: #4CAF50;
        color: white;
      }
      .button1{
      width: 20%;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration:none;
    margin-bottom: 35px;
      }
      h1 {
    text-align: center;
    color: darkblue;
    font-family: monospace;
}

    </style>
</head>
<body>
<div class="percel_container">
    <h1>Add Percel Information</h1>
    <div class="button1">
    <a class="button" href="view_percel_info.php">View</a>
  </div>
  
  <form action="percelconn.php" method="POST">
    <label for="courierno">Courier No</label>
    <input type="text" id="fname" name="courierno" placeholder="Courier No">
    <label for="percelweight">Percel Weight</label>
    <input type="text" id="pw" name="pw" placeholder="Percel Weight">
 

    <label for="payment">Payment</label>
    <input type="text" id="payment" name="payment" placeholder="Amount to pay">
    <label for="city"> Destination</label>
    <select id="city" name="city">
      <option value="Dhaka">Dhaka</option>
      <option value="Khulna">Khulna</option>
      <option value="Jassor">Jassor</option>
    </select>
     <br><br>
     <label for="date">Sending Date</label>
    <input type="date" id="sdate" name="sdate" placeholder="Sending Date">
    <label for="date">Ariving Date</label>
    <input type="date" id="adate" name="adate" placeholder="Ariving Date">
    <br><br>
    <input type="submit" value="Submit">
  </form>
</div>
    
</body>
</html>