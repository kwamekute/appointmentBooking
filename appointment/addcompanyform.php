<?php include 'retrievals.php' ?>
<?php include 'editcodes.php' ?>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>
								Company Details
							</header>
						</div>
						<div class="card-body" id="bar-parent">
							<form action="" class="form-horizontal appointment-form" name="fmaddnew" id="fmaddnew" method="post">
								<div class="form-body">
									<div class="form-group row">
										<label class="control-label col-md-3">Compnay Name
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<input type="text" name="comname" id="comname" data-required="1" placeholder="enter company name" value="" class="form-control input-height" />
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Description</label>
										<div class="col-md-5">
											<textarea name="descriptionofcom" id="descriptionofcom" rows="5"  placeholder="Description of company" 
											class="form-control"><?php echo $des; ?></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="control-label col-md-3">Address
											<span class="required"> * </span>
										</label>
										<div class="col-md-5">
											<textarea name="address" id="address" rows="5"  placeholder="Address" 
											class="form-control"><?php echo ""; ?></textarea>
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

								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button id="btnaddcom" type="submit" class="btn btn-info m-r-20">Submit</button>
											<button id="btncancelcom" type="button" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
