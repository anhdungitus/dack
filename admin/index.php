
<?php
	
	#Start the session:
	session_start();

	if(!isset($_SESSION['username'])) {
		header('Location: login.php');
	}
?>
<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<?php include('config/css.php'); ?>
	<?php include('config/js.php'); ?>

</head>
<body>

	<?php include(D_TEMPLATE.'/navigation.php'); ?>
	<h1>Admin Dashboard</h1>

	<div class="container">

		<h1><?php //echo $pages2['header']; ?></h1>

		<?php //echo $pages2['body_formatted']; ?>



		<?php if(isset($_GET['debug']) == 1) {  ?>
		<pre>
			<?php print_r($pages2); ?>
		</pre>
		<?php } ?>



	</div>

	<?php include(D_TEMPLATE.'/footer.php'); ?>

	<div id="console-debug">
		Test debug window
	</div>


</body>
</html>