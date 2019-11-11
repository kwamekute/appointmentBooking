<?php include 'retrievals.php' ?>
<?php include 'editcodes.php' ?>
<div class="tabbable-line">
	<ul class="nav customtab nav-tabs" role="tablist">
		<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">Old Customer</a></li>
		<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">New Customer </a></li>
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
							<form action="" class="form-horizontal appointment-form" id="fmaddold" name="fmaddold" method="post">
								<div class="form-body">
								
									<div class="form-group row">
										<label class="col-md-3 control-label">Customer
										</label>
										<div class="col-md-5">
										<input type="text" id="appid" name="appid" value="<?php echo $appid; ?>" hidden />
											<select name="customer" id="customer" class="form-control select2-customers">
											<?php if(isset($_GET['appid'])){?>							
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
													<?php echo $c["firstname"].' '.$c["lastname"].' - '.$c["company"]; ?>
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
												<?php if(isset($_GET['appid'])){?>							
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
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
										<?php if(isset($_GET['appid'])){	
										?>
											<button type="submit" id="btnupdateold" name="btnupdateold" class="btn btn-info m-r-20">Update</button>
										<?php
										}else{												
										?>
											<button type="submit" id="btnsubmitold" name="btnsubmitold" class="btn btn-info m-r-20">Submit</button>
											<?php
											}
										?>
											<button type="button" id="btncancelold" name="btncancelold" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
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
								Appointment
							</header>
						</div>
						<div class="card-body" id="bar-parent">
							<form action="" class="form-horizontal appointment-form" name="fmaddnew" id="fmaddnew" method="post">
								<div class="form-body">
									<div class="form-group row">
										<label class="control-label col-md-3">First Name
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input type="text" name="firstname" id="firstname" data-required="1" placeholder="enter first name" value="" class="form-control input-height" />
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Middle Name</label>
										<div class="col-md-5">
											<input type="text" name="middlename" id="middlename" data-required="1" placeholder="enter middle name" value="" class="form-control input-height" />
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Last Name
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input type="text" name="lastname" id="lastname" data-required="1" placeholder="enter last name" value="" class="form-control input-height" />
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Gender
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<select class="form-control input-height" data-required="1" name="gender" id="gender">
												<option value="">Select...</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Date Of Appointment
											<span class="required"> * </span>
										</label>
										<div class="input-append date" id="dp1">
											<input name="duedate" id="duedate" class="formDatePicker" placeholder="Date Of Appointment" value="<?php echo date('Y-m-d'); ?>" size="44" type="text"
											readonly>
											<span class="add-on"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">From</label>
										<div class="col-md-5">
											<div class="row">
												<div class="col-md-5">
													<input name="fromtime" id="fromtime" class="form-control input-height" type="time" value="" id="example-time-input">
												</div>
												<label class="control-label small-label col-md-2">To</label>
												<div class="col-md-5">
													<input name="endtime" id="endtime" class="form-control input-height" type="time" value="" id="example-time-input2">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Mobile No.
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input name="phone" id="phone" type="text" placeholder="mobile number" value="" class="form-control input-height" />
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Email
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope" style="margin-top: 45%;"></i>
												</span>
												<input type="email" class="form-control input-height" name="email" id="email" value="" placeholder="Email Address">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Registration No.
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="regno" id="regno" value="" placeholder="Registration number">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Chasis No.
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="chasis" id="chasis" value="" placeholder="Chasis number">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Make & Model
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="makeandmodel" id="makeandmodel" value="" placeholder="Make and model">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Mileage
										</label>
										<div class="col-md-5">
											<div class="input-group">
												<input type="text" class="form-control input-height" name="mileage" id="mileage" value="" placeholder="Mileage">
											</div>
										</div>
									</div>


									<div class="form-group row">
										<label class="control-label col-md-3">Description Of Service
										</label>
										<div class="col-md-5">
											<textarea name="descriptionofservice" id="descriptionofservice" rows="5"  placeholder="Description of service" 
											class="form-control"></textarea>
										</div>
									</div>

								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button id="btnsubmitnew" type="submit" class="btn btn-info m-r-20">Submit</button>
											<button id="btncancelnew" type="button" class="btn btn-default">Cancel</button>
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