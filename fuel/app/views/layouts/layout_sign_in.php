<!DOCTYPE html>
<html>
<head>
  	<title><?php if(isset($title)) echo $title ?></title>
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('font-awesome.min.css'); ?>

	<?php if(isset($add_css)) echo $add_css ?>

	<?php echo Asset::css('back_end.css'); ?>
	<?php echo Asset::css('green.css'); ?>
</head>
<body class="login">
	<div>
      <div class="login_wrapper">
        <div class="form">
          <section class="login_content">

				<?php echo $content ?>

			    <div class="clearfix"></div>
			    <br>

			    <div>
			      <h1 style="position: relative;"><a href="/" data-no-turbolink><i class="fa fa-paw"></i> HTube!</a></h1>
			      <p>©2016 All Rights Reserved. Privacy and Terms</p>
			    </div>
			  </div>
          </section>
        </div>
      </div>
    </div>

	<?php 
		echo Asset::js('jquery.min.js');
		echo Asset::js('bootstrap.min.js');
		echo Asset::js('back_end.js');
		echo Asset::js('icheck.min.js');
		if(isset($add_js)) echo $add_js;
		if(isset($custom_js)) echo $custom_js;
	?>
</body>
</html>