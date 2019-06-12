<script src="js/jquery2.0.3.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src="js/screenfull.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
	<script src="js/instascan.min.js"></script>
	
	<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
		if (!screenfull.enabled) {
			return false;
		}
		
		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
			});
	});
	</script>