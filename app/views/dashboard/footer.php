<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2017 Aves Academy </b> All rights reserved.
		</div>
	</div>

	
	<script src="<?php echo assets('scripts/datatables/jquery.dataTables.js')?>"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>