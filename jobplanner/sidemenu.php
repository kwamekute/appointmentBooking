
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
			<li class="nav-item  <?php echo $page == 'dashboard'?'active open':''; ?>">
				<a href="index.php" class="nav-link "> 
					<i class="material-icons">dashboard</i>
					<span class="title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item  <?php echo $page == 'confirmed'?'active open':''; ?>">
				<a href="confirmedapp.php" class="nav-link "> 
					<i class="material-icons">group</i>
					<span class="title">Confirmed Appointments</span>
				</a>
			</li>
			<li class="nav-item <?php echo $page == 'jobs'?'active open':''; ?>">
				<a href="jobs.php" class="nav-link "> 
					<i class="material-icons">group</i>
					<span class="title">Confirmed Jobs</span>
				</a>
			</li>
			

		</div>
	</div>
</div>
<!-- end sidebar menu -->