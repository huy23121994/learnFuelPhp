<script type="text/javascript">
    $(document).ready(function () {
    	//DataTable
    	$('#list-item').DataTable();

    	// For delete modal
    	$('a[data-target=".delete_comfirm"]').click(function(){
    		$('a[data-method="delete"]').attr('href','/admin/tags/destroy/' + $(this).data('id'));
    	})
    	
    	<?php if (Session::get_flash('success')): ?>
			new PNotify({
              	title: 'Success',
              	text: '<?php echo Session::get_flash('success') ?>',
              	type: 'success',
              	delay: 2000,
              	styling: 'bootstrap3'
          	});
      	<?php endif; ?>

    })
</script>