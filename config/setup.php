<?php
// Setup File:    

#Database Connection Here...
include('config/connection.php');

// Check connection
if(mysqli_connect_errno())
{
	echo "Faild to connect to MySQL: ". mysqli_connect_errno();
}

# Constants:
define('D_TEMPLATE', 'template');

# Function
include('functions/data.php');
include('functions/template.php');

$site_title  = 'Bắp rang bơ';
$page_title = 'Trang chủ';

if(isset($_GET['page'])) {
	$pageid = $_GET['page']; //Set $pageid to equal the value given in the URL
}
else{
	$pageid = 1; //Set $pageid equal to 1 or the Home page
}

# Page setup
$pages2 = data_page($dbc, $pageid);

?>