<?php
include 'header.php';
include 'sidemenu.php';
?>
<div class="page-wrapper">
	<!-- start page container -->
	<div class="page-container">

		<!-- start page content -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="page-bar">
					<div class="page-title-breadcrumb">
						<div class=" pull-left">
							<div class="page-title">All 
							</div>
						</div>
						<ol class="breadcrumb page-breadcrumb pull-right">
							<li>
								<i class="fa fa-home"></i>&nbsp;
								<a class="parent-item" href="" > Dashboard</a>&nbsp;
								<i class="fa fa-angle-right"></i>
							</li>

							<li>
								<i class="fa fa-group"></i>&nbsp;
								<a class="parent-item" href="" >sometinh</a>&nbsp;
								<i class="fa fa-angle-right"></i>
							</li>

							<li class="active">
								<i class="fa fa-table"></i>&nbsp;
								<a class="parent-item" href="" >another</a>&nbsp;
							</li>
					</ol>
				</div>
			</div>
			
			<!--apps -->
			
			<div class="row">
	<div class="col-md-12">
		<div class="card card-topline-red">
			<div class="card-head">
				<header></header>
				<div class="tools">
					<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
					<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
					<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
				</div>
			</div>
			<div class="card-body ">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="btn-group">
							<a href="appointments.php" id="addRow" class="btn btn-info">
								Check In <i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
							</div>
							<div class="table-scrollable">
								<table class="table table-hover table-checkable order-column full-width" id="checkintb" name="checkintb">
									<thead>
										<tr>
											<th>Queue</th>
											<th>Customer</th>
											<th>Appointment Date/Time</th>						
											<th>Service</th>
											<th>Action </th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- end page content -->

<?php include 'footer.php'; ?>
<script src="js/serviceadvisor.js"></script>