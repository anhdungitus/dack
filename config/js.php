<?php
// Javascript:

?>

<!-- JQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- JQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
		$("#console-debug").hide();

		$("#btn-debug").click(function(){

			$("#console-debug").toggle();
		});
	});
</script>