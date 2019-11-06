<!-- start sidebar menu -->


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