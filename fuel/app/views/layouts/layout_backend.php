<!DOCTYPE html>
<html>
<head>
  	<title><?php if(isset($title)) echo $title ?></title>
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('font-awesome.min.css'); ?>
	<?php echo Asset::css('dataTables.bootstrap.min.css'); ?>
	<?php echo Asset::css('pnotify.css'); ?>
	<?php echo Asset::css('pnotify.buttons.css'); ?>

	<?php if(isset($add_css)) echo $add_css ?>

	<?php echo Asset::css('back_end.css'); ?>
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php 
				echo render('layouts/_sidebar');
				echo render('layouts/_top_nav');
				if(isset($content)) echo $content;
				echo render('layouts/_footer');
			?>
		</div>
	</div>

	<?php 
		echo Asset::js('jquery.min.js');
		echo Asset::js('bootstrap.min.js');
		echo Asset::js('back_end.js');
		echo Asset::js('jquery.dataTables.min.js');
		echo Asset::js('dataTables.bootstrap.min.js');
		echo Asset::js('pnotify.js');
		echo Asset::js('pnotify.buttons.js');
		if(isset($add_js)) echo $add_js;
		if(isset($custom_js)) echo $custom_js;
	?>
</body>
</html>