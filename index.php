<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<body style='margin:30px'>
	<title>Recruitment Search</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
		$( function() {
    $( "#dateofjoining" ).datepicker();
  } );

	</script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark">
	<div class="container-fluid">
		 <div class="navbar-header">
      <a class="navbar-brand" href="#">Recruitment search</a>
    </div>

	</div>
</nav>
<div class="container">
	<h3 style="text-align: center;font-weight: bold;">Search profiles</h3>
	<div class="row">
		        <div class="col-lg-8">
          <form class="form-horizontal" action="index.php" method="POST">
            <div class="form-group">
              <label for="Canditate_name" class="col-lg-4">Canditate Name</label>
              <div class="col-lg-6">
                <input type="text" class="form-control" name="Canditate_name" placeholder="Canditate_name"/>
              </div>
            </div>
          
        
            <div class="form-group">
              <label for="Professional Tag" class="col-lg-4">Prof. Tag</label>
              <div class="col-lg-6">
                <input type="radio" name="Prof. Tag" value="Experienced">Experienced
                <input type="radio" name="Prof. Tag" value="Fresher">Fresher
              </div>
            </div>


         
  <div class="form-group">
              <label for="phoneField" class="col-lg-4">Professional Tag</label>
              <div class="col-lg-6">
          		<select></select>

              </div>
            </div>



</div>
</div>
</body>
</html>