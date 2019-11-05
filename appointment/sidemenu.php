<!-- start sidebar menu -->
<?php

include 'retrievals.php';
?>
<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu">
		<div id="remove-scroll" class="left-sidemenu">
			<ul class="sidemenu page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
			data-slide-speed="200" style="padding-top: 20px">
			<li class="sidebar-toggler-wrapper hide">
				<div class="sidebar-toggler">
					<span></span>
				</div>
			</li>
			<li class="sidebar-user-panel">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="assets/img/user.png" class="img-circle user-img-circle" alt="User Image" />
					</div>
					<div class="pull-left info">
						<p>fullname</p>
					</div> 
				</div>
			</li>

			<li class="nav-item active">
				<a href="index.php" class="nav-link "> 
					<i class="material-icons">dashboard</i>
					<span class="title">Dashboard</span>
				</a>
			</li>
			
			<li class="nav-item">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
					<span class="title">Appointments</span> 
					<span class="label label-rouded label-menu">
					<?php echo $ac;?>
					</span>
					<span class=""></span>
				</a>
				<ul class="sub-menu">

					<li class="nav-item">
						<a href="appointments.php" class="nav-link">
							<span class="title">All Appointments</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $ac;?>
						</a>
					</li>

					<li class="nav-item">
						<a href="bookapp.php" class="nav-link">
							<span class="title">Add Appointment</span>
							<span  style="background:#E67D20;"class="label label-rouded label-menu">
							
						</a>
					</li>
				</ul>
			</li>

		</div>
	</div>
</div>
<!-- end sidebar menu -->