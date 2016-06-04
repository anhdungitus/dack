<?php
// Setup File:    

include('../config/connection.php');

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