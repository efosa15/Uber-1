<?php
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

  $sql = "SELECT * FROM drivers";
  if(@$_GET['capacity'])
    $sql = "SELECT * FROM drivers WHERE passenger_size>=".intval($_GET['capacity']);
  if(@$_GET['sort'] == "rating")
    $sql = "SELECT * FROM drivers order by rating DESC limit 5;";
  if(@$_GET['sort']=='fined')
    $sql = "SELECT * FROM drivers  order by fined_count DESC limit 5;";
  if(@$_GET['sort']=='earned')
    $sql = "SELECT * FROM drivers  order by total_driven DESC limit 5;";


    $result = $conn->query($sql);

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
    <title>Car Lists</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" >
    <link rel='stylesheet' href='assets/css/style.css' type='text/css'>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h4>Filter By</h4>
        <button onclick="window.location='car_list.php?sort=rating'" class="btn btn-primary">Rating</button>
        <button onclick="window.location='car_list.php?sort=fined'" class="btn btn-primary">Fined</button>
        <button onclick="window.location='car_list.php?sort=earned'" class="btn btn-primary">Earned</button>
      </div>
      <?php while($row = $result->fetch_assoc()): ?>
		    <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-3"><a href="#"><img src="assets\images\bmw-i8.jpg" class="img-responsive img-box img-thumbnail"></a></div>
          <div class="col-xs-12 col-sm-9 col-md-9">
              <div class="list-group">
                  <div class="list-group-item">
                      <div class="row-picture"><a href="#" title="sintret"><img class="circle img-thumbnail img-box" src="assets\images\bmw-i8.jpg" alt=""></a></div>
                      <div class="row-content">
                          <div class="list-group-item-heading"><a href="#" title="sintret"><small><?php echo $row['name']; ?></small></a></div>
                          <small>
                          <i class=""></i> Car Type <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="" alt="sintret" title="sintret">: <?php echo $row['car_type']; ?></a></span>  </br>
                          <i class=""></i> Capacity <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="" alt="sintret" title="sintret">: <?php echo $row['passenger_size']; ?></a></span> </br>
                          <i class=""></i> Total Driven <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="" alt="sintret" title="sintret">: <?php echo $row['total_driven']; ?> Kilometres</a></span> </br>
                          <i class=""></i> Car Number <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="" alt="sintret" title="sintret">: <?php echo $row['car_number']; ?> </a></span> </br>
                          <i class=""></i> Fare <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="" alt="sintret" title="sintret">: <?php echo $row['fare']; ?>/Kilometre </a></span></br>
                          <i class=""></i> Fined <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="" alt="sintret" title="sintret">: <?php echo $row['fined_count']; ?> </a></span></br>
                          <i class=""></i> Earned <span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="" alt="sintret" title="sintret">: <?php echo $row['total_driven']; ?> </a></span></br>
                          </small>
                      </div>
                      <div class="rating-block">
                        <h4>Average user rating</h4>
                        <h2 class="bold padding-bottom-7"><?php echo $row['rating']; ?><small>/ 5</small></h2>
                        <?php
                          for($i= 1; $i<= 5; $i++){
                            if($i<= $row['rating']){
                              echo '<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>';
                            }else{
                              echo '<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>';
                            }
                          }
                        ?>
                      </div>
                  </div>
              </div>
            <hr>
          </div>
    </div>
  <?php endwhile; ?>
  </div>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
