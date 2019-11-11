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
									<input type="text" id="cusid" name="cusid" value="<?php echo $cusid; ?>" hidden />
									<input type="text" id="doa" name="doa" value="<?php echo $doa; ?>" hidden />
									<div class="form-group row">
										<label class="control-label col-md-3">Customer Type
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<select class="form-control input-height" data-required="1" name="ctype" id="ctype">
												<option value="">Select...</option>
												<option value="individual" <?php echo($compname===''?'selected':''); ?> >Individual</option>
												<option value="company" <?php echo($compname!=''?'selected':''); ?> >Company</option>
											</select>
										</div>
									</div>
									<div class="form-group row" id="compdiv" name="compdiv" <?php echo($compname===''?'hidden':''); ?>>
										<label class="control-label col-md-3">Company Name
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input type="text" name="compname" id="compname" data-required="1" placeholder="enter company name" value="<?php echo $compname; ?>" class="form-control input-height" />
										</div>
									</div>
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

								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<?php if(!isset($_GET['cusid'])){ ?>
												<button id="btnaddcus" type="submit" class="btn btn-info m-r-20">Submit</button>
											<?php											
											}else{							
											?>
												<button id="btnupdatecus" type="submit" class="btn btn-info m-r-20">Update</button>
											<?php
											}
											?>
											<button id="btncancelcus" type="button" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
