<?php echo Form::open(array("class"=>"form-horizontal form-label-left", "action" => "/admin/tags/update/".$tag->id)); ?>  
    <!-- Need Input field id for unique validation -->
    <input type="hidden" name="id" class="form-control" value="<?php echo $tag->id?>" />

  	<div class="form-group">
    	<label class="control-label col-md-3 col-sm-3 col-xs-12">Tag name <span class="required">*</span>
    	</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="tag_name" class="form-control" value="<?php echo $tag->tag_name?>" />
      </div>
  	</div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Slug
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="slug" value="<?php echo $tag->slug ?>" class="form-control"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Created Time</label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <fieldset disabled>
          <input type="text" value="<?php echo date("d-m-Y H:i:s", $tag->created_at) ?>" class="form-control"/>
        </fieldset>
      </div>
    </div>
  	<div class="ln_solid"></div>
  	<div class="form-group">
      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <button type="submit" class="btn btn-success">Update</button>
        <a type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target=".delete_comfirm"><i class="fa fa-trash"></i> Delete</a>
      </div>
  	</div>

<?php echo Form::close(); ?>

<div class="modal fade delete_comfirm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">Are you sure delete this?</h4>
      </div>
      <div class="modal-body text-center">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <a href="<?php echo "/admin/tags/destroy/".$tag->id ?>" type="button" class="btn btn-success">Yes, I'm sure</a>
      </div>

    </div>
  </div>
</div>