<?php
include_once("config.php");
if ($_REQUEST['weather']=='w') {
$results = $mysqli->query("UPDATE products set product_img_name = 'w1.jpg' WHERE product_img_name = 's1.jpg'");
$results = $mysqli->query("UPDATE products set product_img_name = 'w2.jpg' WHERE product_img_name = 's2.jpg'");
$results = $mysqli->query("UPDATE products set product_img_name = 'w3.jpg' WHERE product_img_name = 's3.jpg'");
$results = $mysqli->query("UPDATE products set product_img_name = 'w4.jpg' WHERE product_img_name = 's4.jpg'");
print("Changed to winter");
} else {
$results = $mysqli->query("UPDATE products set product_img_name = 's1.jpg' WHERE product_img_name = 'w1.jpg'");
$results = $mysqli->query("UPDATE products set product_img_name = 's2.jpg' WHERE product_img_name = 'w2.jpg'");
$results = $mysqli->query("UPDATE products set product_img_name = 's3.jpg' WHERE product_img_name = 'w3.jpg'");
$results = $mysqli->query("UPDATE products set product_img_name = 's4.jpg' WHERE product_img_name = 'w4.jpg'");
print("Changed to summer");
}

