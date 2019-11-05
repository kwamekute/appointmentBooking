<?php 
include '../class/crud.php'; 
$crud = new Crud();
session_start();
if (!(isset ( $_SESSION ['uname'] )) ) {	
	header ( 'location:../index.php' );
}else{
	$username = $_SESSION['uname'];
}

?>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="" />
	<meta name="author" content="Efisah and jebo" />
	<title>Appointment</title>
	
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<!--<link rel="shortcut icon" href="//echo base_url('../assets/img/favicon.ico')" />-->

	<!-- icons -->
	<link href="../assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../assets/css/material-icons/google-material-icons.css">


	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!--bootstrap forms -->
	<link href="../assets/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../assets/bootstrap-datepicker/datepicker.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../assets/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" media="screen" />

	<link href="../assets/steps/steps.css" rel="stylesheet" type="text/css" />

	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">

	<!-- Theme Styles -->
	<link href="../assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme-color.css" rel="stylesheet" type="text/css" />

	<!-- Theme Styles -->
	<link href="../assets/css/formlayout.css" rel="stylesheet" type="text/css" />


	 <!-- dropzone -->
	<link href="../assets/dropzone/dropzone.css" rel="stylesheet" id="rt_style_components" type="text/css" />

	<!--tagsinput-->
	<link href="../assets/jquery-tags-input/jquery-tags-input.css" rel="stylesheet" type="text/css" />

	<!--select2-->
	<link href="../assets/select2/css/select2.css" rel="stylesheet" type="text/css" />
	<link href="../assets/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
	
	<!-- DataTables -->
	<link rel="stylesheet" href="../assets/css/datatables.min.css">
	<link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../assets/css/buttons.dataTables.min.css">
	

</head>
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-red white-sidebar-color logo-red">
<!-- start header -->
<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner">
		<!-- logo start -->
		<div class="page-logo">
			<a href="">
				<span class="logo-icon fa fa-user"></span>
				<span class="logo-default">APBS</span> </a>
			</div>
			<!-- logo end -->
			<ul class="nav navbar-nav navbar-left in">
				<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
			</ul>
			<form class="search-form-opened" action="#" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
						<a href="javascript:;" class="btn submit">
							<i class="icon-magnifier"></i>
						</a>
					</span>
				</div>
			</form>
			<!-- start mobile menu -->
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
				<span></span>
			</a>
			<!-- end mobile menu -->
			<!-- start header menu -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- start language menu -->
					<li class="dropdown language-switch">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="" class="position-left"
							alt=""> English <span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="english"><img src="" alt=""> English</a>
							</li>
						</ul>
					</li>


					<!-- start manage user dropdown -->
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" class="img-circle " src="" />
							<span class="username username-hide-on-mobile"><h4 id="navuser" name="navuser" ><?php echo $username; ?></h4></span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="">
									<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="logout.php">
										<i class="icon-logout"></i> Log Out </a>
									</li>
								</ul>
							</li>
							<!-- end manage user dropdown -->

						</ul>
					</div>
				</div>
			</div>
<!-- end header -->