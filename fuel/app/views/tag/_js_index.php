<script type="text/javascript">
    $(document).ready(function () {
    	//DataTable
    	$('#list-item').DataTable();

    	// For delete modal
    	$('a[data-target=".delete_comfirm"]').click(function(){
    		$('a[data-method="delete"]').attr('href','tags/' + $(this).data('id'));
    	})

    })
</script>