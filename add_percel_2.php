<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <style>
      .percel_container{
        background-color: #040e13;
        padding: 15px;
        width: 60%;
        margin: auto;
         margin-top: 15px;
    }
    </style>

    <title>Add Courier Information</title>
</head>
<body>
<div class="percel_container">
    <h1 class="text-center text-white">Add Courier Information</h1><br>
    <div class="clearfix">
    <a class="btn btn-primary float-right mr-2" href="view_percel_info.php">View</a>
    <a class="btn btn-primary float-right mr-2" href="home.html">Back</a>
  </div><br>
  <form class="container text-white" action="percelconn.php" method="POST">
        <div class="form-group">
          <label for="courierno">Courier No</label>
          <input type="text" class="form-control w-75" id="fname" name="courierno" placeholder="Courier No">
        </div>
        <div class="form-group">
          <label for="percelweight">Percel Weight</label>
          <input type="text" class="form-control  w-75" id="pw" name="pw" placeholder="Percel Weight">
        </div>
        <div class="form-group">
          <label for="payment">Payment</label>
          <input type="text" class="form-control  w-75" id="payment" name="payment" placeholder="Amount to pay">
        </div>
        <div class="form-group">
          <label for="city"> Destination</label>
          <select id="city" class="form-control  w-75" name="city">
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Jassor">Jassor</option>
          </select>
        </div>
        <div class="form-group">
          <label for="date">Sending Date</label>
          <input type="date" class="form-control  w-75" id="sdate" name="sdate" placeholder="Sending Date">
        </div> 
        <div class="form-group">
          <label for="date">Ariving Date</label>
          <input type="date" class="form-control  w-75" id="adate" name="adate" placeholder="Ariving Date">
        </div>
    <br><br>
    <input type="submit" class="btn btn-success" value="Submit">
  </form>
</div>

<script src="js/popper.min.js"></script>
 <script src="js/jquery-slim.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
    
</body>
</html>