<?php
if(isset($_POST['submit'])){


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "uber";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO drivers (name, phone, fare,total_driven,car_type,car_number,passenger_size)
          VALUES (
            '".$_POST['name']."',
            '".$_POST['phone']."',
            ".$_POST['fare'].",
            ".$_POST['total_driven'].",
            '".$_POST['car_type']."',
            '".$_POST['car_number']."',
            ".$_POST['passenger_size']
          .")";

  if ($conn->query($sql) === TRUE) {
      echo "New driver successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  exit;
}
?>

<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>title</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" >
    <link rel='stylesheet' href='/assets/css/style.css' type='text/css'>
  </head>
  <body>
    <div class="container">
      <div class="center"><h4>Add drivers</h4>
        <form method="POST" action="">
          <input type="text" name="name" placeholder="Driver Name" /></br></br>
          <input type="text" name="phone" placeholder="Phone Number" /></br></br>
          <input type="number" name="fare" placeholder="Fare/Km" /></br></br>
          <input type="number" name="total_driven" placeholder="Total Driven" /></br></br>
          <input type="text" name="car_type" placeholder="Car Type" /></br></br>
          <input type="text" name="car_number" placeholder="Car Number" /></br></br>
          <input type="number" name="passenger_size" placeholder="Passenger Size" /></br></br>
          <div class="row">
		          <h2>
                 <div class="col-md-12">
                  <button type="submit" name ="submit" class="btn btn-labeled btn-success">
                      <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Submit</button>
                    <br />
              </h2>
	         </div>
        </form>
      </div>
    </div>
  <script src="/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
