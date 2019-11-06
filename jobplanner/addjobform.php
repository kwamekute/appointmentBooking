<?php include 'retrievals.php' ?>
<?php include 'editcodes.php' ?>
<div class="tabbable-line">
	<ul class="nav customtab nav-tabs" role="tablist">
		<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">Service Details</a></li>
		<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Car Details </a></li>
		<li class="nav-item"><a href="#tab3" class="nav-link" data-toggle="tab">Assign A Technician</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active fontawesome-demo" id="tab1">	
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>
								Appointment
							</header>
						</div>
						<div class="card-body" id="bar-parent">
							<form action="" class="form-horizontal appointment-form" id="fmaddjob" name="fmaddjob" method="post">
								<div class="form-body">
									<div class="form-group row">
										<label class="col-md-3 control-label">Customer
										</label>
										<div class="col-md-5">
										<input type="text" id="jobid" name="jobid" value="<?php echo $jobid; ?>" hidden />
											<select name="customer" id="customer" class="form-control select2-customers">
											<?php if(isset($_GET['appid']) || isset($_GET['jobid'])){?>							
												<option value="<?php echo $cusid; ?>"><?php echo $cusname ?></option>
											<?php
												}else{
												?>
												<option value="">Select a customer</option>
											<?php
												}
											?>
												<?php foreach($resultc as $c) { ?>
													<option value="<?php echo $c["id"]; ?>">
													<?php echo $c["firstname"].' '.$c["lastname"]; ?>
													</option>
												<?php  
												}
												?>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-md-3 control-label">Vehicle(s)
										</label>
										<div class="col-md-5">

											<select id="multiple" name="vehicle" id="vehicle" class="form-control select2-customer-vehicles" multiple>
												<?php if(isset($_GET['appid']) || isset($_GET['jobid'])){?>							
												<option value="<?php echo $vid ?>" selected><?php echo $vid; ?></option>
												<?php
													}else{
													?>
													<option value="">Select a vehicle</option>
												<?php
													}
												?>
													<?php foreach($resultv as $v) {?>
													<option value="<?php echo $v["id"]; ?>">
														<?php echo $v["id"]; ?>
													</option>
													<?php
													}
													?>
											</select>
										</div>

									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Date Of Appointment
											<span class="required"> * </span>
										</label>
										<div class="input-append date" id="dp1">
											<input name="duedateo" id="duedateo" class="formDatePicker" placeholder="Date Of Appointment" value="<?php echo $duedate; ?>" size="44" type="text"
											readonly>
											<span class="add-on"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">From</label>
										<div class="col-md-5">
											<div class="row">
												<div class="col-md-5">
													<input name="fromtimeo" id="fromtimeo" class="form-control input-height" type="time" value="<?php echo $fromtime; ?>" id="example-time-input">
												</div>
												<label class="control-label small-label col-md-2">To</label>
												<div class="col-md-5">
													<input name="totimeo" id="totimeo" class="form-control input-height" type="time" value="<?php echo $totime;?>" id="example-time-input2">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Description Of Service
										</label>
										<div class="col-md-5">
											<textarea name="descriptionofserviceo" id="descriptionofserviceo" rows="5"  placeholder="Description of service" 
											class="form-control"><?php echo $des; ?></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">New Description Of Service
										</label>
										<div class="col-md-5">
											<textarea name="newdescriptionofserviceo" id="newdescriptionofserviceo" rows="5"  placeholder="Description of service" 
											class="form-control"><?php echo $newdes; ?></textarea>
										</div>
									</div>
								</div>
								<div class="form-actions">
									
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tab-pane fontawesome-demo" id="tab2">	
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>
								Car Details
							</header>
						</div>
						<div class="card-body" id="bar-parent">
								<div class="form-body">

									<div class="form-group row">
										<label class="control-label col-md-3">Registration No.
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="regno" id="regno" value="<?php echo $regno; ?>" placeholder="Registration number">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Chasis No.
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="chasis" id="chasis" value="<?php echo $chasis; ?>" placeholder="Chasis number">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Make & Model
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="makeandmodel" id="makeandmodel" value="<?php echo $makeandmodel; ?>" placeholder="Make and model">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Mileage
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="mileage" id="mileage" value="<?php echo $mileage; ?>" placeholder="Mileage">
											</div>
										</div>
									</div>

								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											
										</div>
									</div>
								</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
				<div class="tab-pane fontawesome-demo" id="tab3">	
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>
								Assign to technician
							</header>
						</div>
						<div class="card-body" id="bar-parent">
								<div class="form-body">
								
									<div class="form-group row">
										<label class="col-md-3 control-label">Technician
										</label>
										<div class="col-md-5">
										<input type="text" id="appid" name="appid" value="<?php echo $appidc; ?>" hidden />
											<select name="technician" id="technician" class="form-control select2-customers">
											<?php if(isset($_GET['jobid'])){?>							
												<option value="<?php echo $tid; ?>"><?php echo $tname ?></option>
											<?php
												}else{
												?>
												<option value="">Select a Technician</option>
											<?php
												}
											?>
												<?php foreach($resultt as $t) { ?>
													<option value="<?php echo $t["id"]; ?>">
													<?php echo $t["firstname"].' '.$t["lastname"]; ?>
													</option>
												<?php  
												}
												?>
											</select>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="control-label col-md-3">Start Date
											<span class="required"> * </span>
										</label>
										<div class="input-append date" id="dp1">
											<input name="datejob" id="datejob" class="formDatePicker" placeholder="Start Date" value="<?php echo $datejob; ?>" size="44" type="text"
											readonly>
											<span class="add-on"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Start Time</label>
										<div class="col-md-5">
											<div class="row">
												<div class="col-md-5">
													<input name="starttime" id="starttime" class="form-control input-height" type="time" value="<?php echo $starttime; ?>" id="example-time-input">
												</div>
												<label class="control-label small-label col-md-2">End Time</label>
												<div class="col-md-5">
													<input name="endtime" id="endtime" class="form-control input-height" type="time" value="<?php echo $endtime;?>" id="example-time-input2">
												</div>
											</div>
										</div>
									</div>
					

								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button type="submit" id="btnaddjob" name="btnaddjob" class="btn btn-info m-r-20">Confirm</button>
											<button type="button" id="btncancel" name="btncancelold" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>