<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>TGCL</title> 
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Appointment Booking System" />
	<meta name="author" content="Efisah and Jebo" />

	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'> -->
	<link rel="stylesheet" href="assets/css/login.css">

	<link rel="stylesheet" href="assets/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/plugins.min.cs" type="text/css" />
</head>
<body>
	<div class="container">
		<div class="info">

			<h3>TGCL Appointment Booking System</h3><span>Login into your dashboard</span>
		</div>
		<div class="form">
			<div class="thumbnail"><img src="assets/img/planner.png"/></div>
			<div class="row" style="margin-bottom: 10px">
				<div class="col-sm-12">
					<div id="p2" style="display: none;" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
					<div id="error" style="display: none;" class="alert alert-danger">Invalid username or password!</div>
					<div id="server-error" style="display: none;" class="alert alert-danger">Server error!</div>
				</div>
			</div>
			<form id="login-form" name='login-form' action="" method="post">
				<div class="form-group">
					<input type="text" name='username' id='username' placeholder="username" required class="form-control form-control-lg">
				</div>
				<div class="form-group">
					<input type="password" name='password' id='password' placeholder="password" required class="form-control form-control-lg " >
				</div>
				<input type="submit" value="login" id='btnlogin'name='btnlogin' class="button">

			</form>
		</div>
	</div>

	<script src="assets/jquery.min.js" ></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
	<script src="assets/popper/popper.js"></script>
	<script src="assets/jquery.blockui.min.js"></script>
	<script src="assets/material/material.min.js"></script>
	<script src="login.js"></script>
	
	
</body>
</html>
