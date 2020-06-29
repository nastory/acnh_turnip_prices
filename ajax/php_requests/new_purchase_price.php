<?php 

include('../../php/includes/functions.php');

$user = $_REQUEST['user'];
$week_id = $_REQUEST['week_id'];
$price = $_REQUEST['price'];

$price = (int)$price;
if(!$price){
	die('enter a valid price');
}

$return = postPurchaseData($week_id, $user, $price);

echo $return;
?>