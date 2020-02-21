<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Percel Information</title>
</head>
<body>
<div class="percel_container">
    <h1>Percel Information</h1>
    <div class="button button1">
    <a href="view_percel_info.php">Percel Information</a></div>
  
  <form action="percelconn.php" method="POST">
    <label for="courierno">Courier No</label>
    <input type="text" id="fname" name="courierno" placeholder="Courier No">
    <label for="percelweight">Percel Weight</label>
    <input type="text" id="pw" name="pw" placeholder="Percel Weight">
    <br><br>

    <label for="payment">Payment:</label>
    <input type="text" id="payment" name="payment" placeholder="Amount to pay">
    <label for="city"> Where to Sent:</label>
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