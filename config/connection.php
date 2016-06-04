<?php 
	#Database Connection Here...
	$dbc = mysqli_connect('localhost', 'root', 'nxtyentya', 'automcms') or die('Error:'.mysqli_connect_errno);

	// Check connection
	if(mysqli_connect_errno())
	{
		echo "Faild to connect to MySQL: ". mysqli_connect_errno();
	}

	
?>