<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="jqueryui/css/custom-theme/jquery-ui-1.9.0.custom.css">
		<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="jqueryui/js/jquery-1.8.2.js"></script>
		<script type="text/javascript" src="jqueryui/js/jquery-ui-1.9.0.custom.js"></script>
		<style type="text/css">

		</style>

		<script>
		$(document).ready(function(){
			
			$('#search').autocomplete({
				source: 'search.php',
				minLength: 2,
				disabled: false

			});
		});
    	</script>
	</head>
	<body>
		<div class="ui-widget">
			<label for="search">Search</label>
			<input type="text" id="search" />
		</div>
	</body>
</html>