<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Wellcome To Uber Drivers</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" >
    <link rel='stylesheet' href='assets/css/style.css' type='text/css'>
  </head>
  <body>
    <div class="container">
      <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Search For Available cars</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="location">Name</label>
  <div class="col-md-4">
  <input id="location" name="location" type="text" placeholder="Your Name" class="form-control input-md">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radius">Current Location</label>
  <div class="col-md-4">
    <select id="radius" name="radius" class="form-control">
      <option value="1">Banani</option>
      <option value="2">Motijheel</option>
      <option value="1">Uttara</option>
      <option value="2">Banani</option>
      <option value="1">Mohakhali</option>
      <option value="2">Gulshan</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="property_type">Location Traveling To</label>
  <div class="col-md-4">
    <select id="property_type" name="property_type" class="form-control">
      <option value="1">Dhanmondi</option>
      <option value="2">Motijheel</option>
      <option value="1">Uttara</option>
      <option value="2">Banani</option>
      <option value="1">Mohakhali</option>
      <option value="2">Gulshan</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="price_min">Number of passengers</label>
  <div class="col-md-2">
    <select id="capacity" name="price_min" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="1">3</option>
      <option value="2">4</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button type="button" onclick="search()" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>
 </div>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function search(){
      window.location = "car_list.php?capacity="+$('#capacity :selected').text();
    }
  </script>
  </body>
</html>
