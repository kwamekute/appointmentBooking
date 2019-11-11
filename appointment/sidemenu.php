<!-- start sidebar menu -->

<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu">
		<div id="remove-scroll" class="left-sidemenu">
			<ul class="sidemenu page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
			<li class="sidebar-toggler-wrapper hide">
				<div class="sidebar-toggler">
					<span></span>
				</div>
			</li>
			<br>
			<li class="sidebar-user-panel">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="../assets/img/user.png" class="img-circle user-img-circle" alt="User Image" />
					</div>
					<div class="pull-left info">
						<p><?php echo $fullname; ?></p>
					</div>
				</div>
			</li>

			<li class="nav-item <?php echo $page == 'dashboard'?'active open':''; ?>">
				<a href="index.php" class="nav-link "> 
					<i class="material-icons">dashboard</i>
					<span class="title">Dashboard</span>
				</a>
			</li>
			
			<!-- Appointments Menu Group -->
			<li class="nav-item  <?php echo $page == 'appts'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">date_range</i>
					<span class="title">Appointments</span> 
					<span class="label label-rouded label-menu">
					<?php echo $ac;?>
					</span>
					<span class=""></span>
				</a>
				<ul class="sub-menu">

					<li class="nav-item <?php echo $page == 'appts'?'active open':''; ?>">
						<a href="appointments.php" class="nav-link">
							<span class="title">All Appointments</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $ac;?>
						</a>
					</li>

					<li class="nav-item <?php echo $page == 'addappts'?'active open':''; ?>">
						<a href="bookapp.php" class="nav-link">
							<span class="title">Add Appt</span>
							<span  style="background:#167CCB;"class="label label-rouded label-menu">
							<i class="material-icons" style="margin-top:-7px;">add</i>
						</a>
						</a>
					</li>
				</ul>
			</li>
			<!-- Customer Menu Group -->
			<li class="nav-item <?php echo $page == 'cust'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
					<span class="title">Customer</span> 
					<span class="label label-rouded label-menu">
					<?php echo $ac;?>
					</span>
					<span class=""></span>
				</a>
				<ul class="sub-menu">

					<li class="nav-item <?php echo $page == 'cust'?'active open':''; ?>">
						<a href="customers.php" class="nav-link">
							<span class="title">All Customers</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $ac;?>
						</a>
					</li>

					<li class="nav-item <?php echo $page == 'addcust'?'active open':''; ?>">
						<a href="addcustomer.php" class="nav-link">
							<span class="title">Add Customer</span>
							<span  style="background:#167CCB;"class="label label-square label-menu">
							<i class="material-icons" style="margin-top:-7px;">add</i>
							
						</a>
					</li>
				</ul>
			</li>
			
			<!-- Company Menu Group 
			<li class="nav-item <?php echo $page == ''?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
					<span class="title">Company</span> 
					<span class="label label-rouded label-menu">
					<?php echo $ac;?>
					</span>
					<span class=""></span>
				</a>
				<ul class="sub-menu">

					<li class="nav-item">
						<a href="companies.php" class="nav-link">
							<span class="title">All Companies</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $ac;?>
						</a>
					</li>

					<li class="nav-item">
						<a href="addcompany.php" class="nav-link">
							<span class="title">Add Company</span>
							<span  style="background:#167CCB;"class="label label-rouded label-menu">
							<i class="material-icons" style="margin-top:-7px;">add</i>
							
						</a>
					</li>
				</ul>
			</li> -->
			
			
			<!-- Vehicles Menu Group -->
			<li class="nav-item <?php echo $page == 'veh'?'active open':''; ?>">
				<a href="#" class="nav-link nav-toggle"> <i class="material-icons">drive_eta</i>
					<span class="title">Vehicle</span> 
					<span class="label label-rouded label-menu">
					<?php echo $ac;?>
					</span>
					<span class=""></span>
				</a>
				<ul class="sub-menu">

					<li class="nav-item <?php echo $page == 'veh'?'active open':''; ?>">
						<a href="vehicles.php" class="nav-link">
							<span class="title">All Vehicles</span>
							<span  style="background:#C9302C;"class="label label-rouded label-menu">
							<?php echo $ac;?>
						</a>
					</li>

					<li class="nav-item <?php echo $page == 'addveh'?'active open':''; ?>">
						<a href="addcars.php" class="nav-link">
							<span class="title">Add Vehicle</span>
							<span  style="background:#167CCB;"class="label label-rouded label-menu">
							<i class="material-icons" style="margin-top:-7px;">add</i>
							
						</a>
					</li>
				</ul>
			</li>
			

		</div>
	</div>
</div>
<!-- end sidebar menu -->