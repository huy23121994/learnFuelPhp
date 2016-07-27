<script type="text/javascript">
	$(document).ready(function(){
		<?php if (Session::get_flash('success')): ?>
			new PNotify({
              	title: 'Success',
              	text: '<?php echo Session::get_flash('success') ?>',
              	type: 'success',
              	delay: 2000,
              	styling: 'bootstrap3'
          	});
      	<?php endif; ?>

      	<?php if (Session::get_flash('error')): ?>
      		<?php foreach (Session::get_flash('error') as $error): ?>
				new PNotify({
	              	title: 'Error',
	              	text: '<?php echo $error ?>. Update fail',
	              	type: 'error',
	              	hide: false,
	              	delay: 3000,
	              	styling: 'bootstrap3'
	          	});
      		<?php endforeach; ?>
      	<?php endif; ?>
	})
</script>