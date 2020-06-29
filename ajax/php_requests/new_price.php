<?php 

include('../../php/includes/functions.php');

$user = $_REQUEST['user'];
$dat = $_REQUEST['dat'];
$time_of_day = $_REQUEST['time_of_day'];
$price = $_REQUEST['price'];

$price = (int)$price;
if(!$price){
	die('enter a valid price');
}


$dat = strtotime($dat);

if ($time_of_day == 'afternoon') {
	$dat = date('Y-m-d 12:00:00', $dat);
} elseif ($time_of_day == 'morning') {
	$dat = date('Y-m-d 00:00:00', $dat);
} else {
	die('have to select time of day');
}

if ($dat == '1970-01-01 00:00:00' | $dat == '1970-01-01 12:00:00') {
	die('enter a date');
}

$return = postData($dat, $user, $price);

echo $return;
?>