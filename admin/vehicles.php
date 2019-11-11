<?php
$page ="veh";
$portal = "Administrator";
include '../includes/header.php';
include 'sidemenu.php';
?>
<div class="page-wrapper">
	<!-- start page container -->
	<div class="page-container">

		<!-- start page content -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="page-bar">
				<br>
					<div class="page-title-breadcrumb">
						<div class=" pull-left">
							<div class="page-title">All Vehicles
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
							<a href="addcars.php" id="addRow" class="btn btn-info">
								Add New <i class="fa fa-plus"></i>
							</a>
						</div>
					</div>
							</div>
							<div class="table-scrollable">
								<table class="table table-hover table-checkable order-column full-width" id="vehtb" name="vehtb">
									<thead>
										<tr>
											<th>ID/Reg No.</th>
											<th>Customer Name</th>
											<th>Chasis</th>						
											<th>Make And Model</th>
											<th>Mileage</th>
											<th>Date Added</th>
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

<?php include '../includes/footer.php'; ?>
<script src="js/cars.js"></script>