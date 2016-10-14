<?php
  if(!isset($_GET['id']) && !isset($_POST['submit'])){
    echo "Invalid parameter";
    exit;
  }


  // update driver here
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


  if(isset($_POST['submit'])){
    $sql = "UPDATE drivers"
          ." SET name='".$_POST['name']."',"
          ." phone='".$_POST['phone']."',"
          ." fare=".$_POST['fare'].","
          ." total_driven=".$_POST['total_driven'].","
          ." car_type='".$_POST['car_type']."',"
          ." car_number='".$_POST['car_number']."',"
          ." passenger_size=".$_POST['passenger_size']
          ." WHERE id=".intval($_POST['id']);

    if ($conn->query($sql) === TRUE) {
        echo "Driver updated successfully";
    } else {
        echo "Error updating driver: " . $conn->error;
    }

    $conn->close();
    exit;
  }

  //
  $row = [];
  if($_GET['id']){
    $sql = "SELECT * FROM drivers WHERE id=".intval($_GET['id']);
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Driver not found";
        exit;
    }
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
    <title>Driver Update</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" >
    <link rel='stylesheet' href='/assets/css/style.css' type='text/css'>
  </head>
  <body>
    <div class="container">
      <div class="center"><h3>Update All Driver Info</h3>
        <form method="POST" action="" >
        <input type="text" name="name" placeholder="name" value="<?php echo $row['name']; ?>" /></br></br>
        <input type="text" name="phone" placeholder="phone" value="<?php echo $row['phone']; ?>" /></br></br>
        <input type="number" name="fare" placeholder="fare" value="<?php echo $row['fare']; ?>" /></br></br>
        <input type="number" name="total_driven" placeholder="total_driven" value="<?php echo $row['total_driven']; ?>" /></br></br>
        <input type="text" name="car_type" placeholder="car_type" value="<?php echo $row['car_type']; ?>" /></br></br>
        <input type="text" name="car_number" placeholder="car_number" value="<?php echo $row['car_number']; ?>" /></br></br>
        <input type="number" name="passenger_size" placeholder="passenger_size" value="<?php echo $row['passenger_size']; ?>"/></br></br>
          <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>

          <input type="submit" name="submit" />
        </form>
      </div>
    </div>
  <script src="/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
