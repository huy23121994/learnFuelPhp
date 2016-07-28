
<?php echo Form::open(array("action" => "/users/create")); ?>
    <h1>Create Account</h1>

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
      <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
      <input type="password" name="password_confirmation" class="form-control" placeholder="Password confirmation">
    </div>
    <div>
      <button class="btn btn-success submit">Sign up</button>
    </div>
<?php echo Form::close(); ?>
    <div class="clearfix"></div>

    <div class="separator">
      <p class="change_link">Already a member ?
        <a href="/sign-in" class="text-success"> <u>Sign in</u> </a>
      </p>