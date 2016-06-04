
<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $pages2['title'].' | '.$site_title; ?>  </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<?php include('config/css.php'); ?>
	<?php include('config/js.php'); ?>

</head>
<body>

	<?php include(D_TEMPLATE.'/navigation.php'); ?>

	<div class="container">

		<h1><?php echo $pages2['header']; ?></h1>

		<?php echo $pages2['body_formatted']; ?>



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