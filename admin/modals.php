<!-- Add Test -->
<div class="modal fade mfp-hide" id="staffoptions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><button type="button" class="btn btn-default"  id="btnstaffd" name="btnstaffd">Edit Staff Details</button></h4>
		
      </div>
      <div class="modal-body">
		<div class="form-body">		
		<form action="" class="form-horizontal appointment-form" name="fmadduser" id="fmadduser" method="post">
		<div class="form-body">
			<input type="text" id="staffid" name="staffid" value="" hidden />
			<input type="text" id="role" name="role" value="" hidden />
			<div class="form-group row">
				<label class="control-label col-md-3">Password
					<span class="required"> * </span>
				</label>
				<div class="col-md-5">
					<input type="password" name="password" id="password" data-required="1" placeholder="enter password" value="" class="form-control input-height" />
				</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-md-3">Confirm Password</label>
				<div class="col-md-5">
					<input type="password" name="confirmpass" id="confirmpass" data-required="1" placeholder="confirm password" value="" class="form-control input-height" />
				</div>
			</div>	
		</div>			
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btnadduser" name="btnadduser">Add as User</button>
      </div>
	  </form>
    </div>
  </div>
</div>
<!-- EndModal -->