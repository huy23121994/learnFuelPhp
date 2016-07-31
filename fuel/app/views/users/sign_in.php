
<?php echo Form::open(array("action" => "sign-in")); ?>
    <h1>Sign in</h1>

    <?php if(Session::get_flash('error')) :?>
      <div class="text-left text-danger">
        <p>Error</p>
        <ul>
            <li><?php echo implode('</li><li>', e((array) Session::get_flash('error'))); ?></li>
        </ul>
      </div>
    <?php endif ?>

    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="checkbox text-left">
	  	<label style="padding-left: 0">
	        <input type="checkbox" name="remember" class="flat">
	        Remember me on this computer
	  	</label>
	</div>
    <div class="text-center">
      <button class="btn btn-success submit">Sign up</button>
    </div>
<?php echo Form::close(); ?>
    <div class="clearfix"></div>

    <div class="separator">
	    <p class="change_link">New to site?
	      <a href="/sign-up" class="text-success"> <u>Create Account</u> </a>
	    </p>