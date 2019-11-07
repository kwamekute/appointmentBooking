<?php include 'retrievals.php' ?>
<?php include 'editcodes_cstomer.php' ?>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>
								Customer Details
							</header>
						</div>
						<div class="card-body" id="bar-parent">
							<form action="" class="form-horizontal appointment-form" name="fmaddnew" id="fmaddnew" method="post">
								<div class="form-body">
									<input type="text" id="cusid" name="cusid" value="<?php echo $staffid; ?>" hidden />
									<input type="text" id="doa" name="doa" value="<?php echo $doa; ?>" hidden />
									<div class="form-group row">
										<label class="control-label col-md-3">First Name
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input type="text" name="firstname" id="firstname" data-required="1" placeholder="enter first name" value="<?php echo $cusfname; ?>" class="form-control input-height" />
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
											<input type="text" name="lastname" id="lastname" data-required="1" placeholder="enter last name" value="<?php echo $cuslname; ?>" class="form-control input-height" />
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Gender
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<select class="form-control input-height" data-required="1" name="gender" id="gender">
												<option value="">Select...</option>
												<option value="male" <?php echo($gender==='male'?'selected':''); ?> >Male</option>
												<option value="female" <?php echo($gender==='female'?'selected':''); ?> >Female</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="control-label col-md-3">Mobile No.
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input name="phone" id="phone" type="text" placeholder="mobile number" value="<?php echo $phone; ?>" class="form-control input-height" />
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
												<input type="email" class="form-control input-height" name="email" id="email" value="<?php echo $email; ?>" placeholder="Email Address">
											</div>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-md-3 control-label">Role/Department
										</label>
										<div class="col-md-5">
											<select name="role" id="role" class="form-control select2-customers">											
												<option value="">Select a Role</option>
												<?php foreach($resultr as $r) { ?>
													<option value="<?php echo $r["id"]; ?>">
													<?php echo $r["rolename"]; ?>
													</option>
												<?php  
												}
												?>
											</select>
										</div>
									</div>

								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
												<button id="btnaddstaff" type="submit" class="btn btn-info m-r-20">Submit</button>
											<button id="btncancelstaff" type="button" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
