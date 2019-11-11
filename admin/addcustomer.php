<?php
$page ="addcust";
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
							<div class="page-title">Customer Details
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
			
			<?php include 'addcustomerform.php'; ?>
			
		</div>
	</div>
	<!-- end page content -->

<?php include '../includes/footer.php'; ?>
<script src="js/appoint.js"></script>
<script src="js/customer.js"></script>