
<?php 
session_start();
include('config/setup.php'); 

if($_POST) {
	$q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
	$r = mysqli_query($dbc, $q);

	if(mysqli_num_rows($r) == 1){
		$_SESSION['username'] = $_POST['email'];
		header('location: index.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Admin Login </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<?php include('config/css.php'); ?>
	<?php include('config/js.php'); ?>

</head>
<body>

	<div class="container">

		
		<div class="row">
			
			
			<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-info">
			<div class="panel-heading">
				<strong>Login</strong>
			</div>
			<div class="panel-body">

				<?php
					if($_POST){
						echo $_POST['email'];
						echo '<br>';
						echo $_POST['password'];
					}
				?>
				<form action="login.php" method="post">
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
				  </div>

				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
				
			</div> <!--End panel-->

			</div> <!-- End col-->
			
		</div> <!--End row-->
		

	</div><!-- End container -->

	<?php include(D_TEMPLATE.'/footer.php'); ?>


</body>
</html>