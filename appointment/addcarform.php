<?php include 'retrievals.php' ?>
<?php include 'editcodes.php' ?>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="card card-box">
						<div class="card-head">
							<header>
								Vehicle Details
							</header>
						</div>
						<div class="card-body" id="bar-parent">
							<form action="" class="form-horizontal appointment-form" name="fmaddnew" id="fmaddnew" method="post">
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
													<?php echo $c["firstname"].' '.$c["lastname"]; ?>
													</option>
												<?php  
												}
												?>
											</select>
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

								</div>
								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button id="btnaddveh" type="submit" class="btn btn-info m-r-20">Submit</button>
											<button id="btncancelveh" type="button" class="btn btn-default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
