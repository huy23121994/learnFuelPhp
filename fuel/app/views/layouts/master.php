<!DOCTYPE html>
<html>
<head>
  	<title>Document</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('font-awesome.min.css'); ?>
	<?php if(isset($add_css)) echo $add_css ?>
</head>
<body class="<?php echo $body_class; ?>">
	
	<?php echo $content; ?>
	<?php if(isset($add_js)) echo $add_js ?>
</body>
</html>