<?php
$currency = '&#8377; '; //Currency Character or code

$db_username = getenv('DATABASE_USER');
$db_password = getenv('DATABASE_PASSWORD');
$db_name = getenv('DATABASE_NAME');
$db_host = getenv('DATABASE_SERVICE_NAME');

$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );						
//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
