
<?php echo Form::open(array("class"=>"form-horizontal form-label-left", "action" => "/admin/categories/create")); ?>

    <?php if (Session::get_flash('error')): ?>
      <div class="text-danger">
        <strong>Error</strong>
        <ul>
          <li><?php echo implode('</li><li>', e((array) Session::get_flash('error'))); ?></li>
        </ul>
      </div>
    <?php endif; ?>

  	<div class="form-group">
    	<label class="control-label" for="first-name">Category Name <span class="required">*</span></label>
      	<input type="text" name="category_name" class="form-control"/>
    	<p class="hep-block">The name is how it appears on your site.</p>
  	</div>

  	<div class="form-group">
    	<label class="control-label" for="last-name">Slug</label>
      	<input type="text" name="slug" class="form-control" />
    	<p class="help-block">The "slug" is the URL-friendly version of the name. Ex: If you enter "amazing-nails", url will be "domain.com/tag/amazing-nails"</p>
  	</div>
  	<div class="ln_solid"></div>
  	<div class="form-group">
      	<button type="submit" class="btn btn-success">Submit</button>
  	</div>
</form>
<?php echo Form::close(); ?>