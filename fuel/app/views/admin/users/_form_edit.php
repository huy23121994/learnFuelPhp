<div class="modal fade user_form_edit" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <?php echo Form::open(array("class"=>"form-horizontal form-label-left", "action" => "/admin/users/update")); ?>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Full Name
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input type="text" name="fullname" class="form-control col-md-7 col-xs-12" value="<?php echo $profile_fields['fullname']?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input type="text" name="email" class="form-control col-md-7 col-xs-12" value="<?php echo $user->email ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Role <span class="required">*</span></label>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <select name="group" class="form-control">
                  <option value="0">User</option>
                  <option value="1" <?php echo $user->group ? 'selected' : '' ?> >Administrator</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address
            </label>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <input type="text" name="address" class="form-control col-md-7 col-xs-12" value="<?php echo $profile_fields['address'] ?>">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <a class="btn btn-default" data-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>

        <?php echo Form::close(); ?>
      </div>

    </div>
  </div>
</div>