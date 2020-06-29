<?php 

include('../../php/includes/functions.php');
include('../../php/includes/Queries.php');

$queries = new Queries();

/* ts plot data */
$data = getData($queries->tsData);

$users = [];
$date = [];
$price = [];

forEach($data as $row) { // get list of users
	array_push($users, $row['user_name']);
	$users = array_unique($users);
}

$data_by_user = [];
forEach($users as $user) { // get date and price for each user
	$data_by_user[$user] = [
		'date' => [],
		'price' => []
	];
	forEach($data as $row) {
		if($row['user_name']==$user){
			array_push($data_by_user[$user]['date'], $row['dat']);
			array_push($data_by_user[$user]['price'], $row['price']);
		}
	}
}

/* last week data */
$data = getData($queries->tsLastWeekData);

$users = [];
$date = [];
$price = [];

forEach($data as $row) { // get list of users
	array_push($users, $row['user_name']);
	$users = array_unique($users);
}

$last_week_data_by_user = [];
forEach($users as $user) { // get date and price for each user
	$last_week_data_by_user[$user] = [
		'date' => [],
		'price' => []
	];
	forEach($data as $row) {
		if($row['user_name']==$user){
			array_push($last_week_data_by_user[$user]['date'], $row['dat']);
			array_push($last_week_data_by_user[$user]['price'], $row['price']);
		}
	}
}


/* histogram data */
$data = getData($queries->histData);

$histoPrice = [];
forEach($data as $row) {
	array_push($histoPrice, $row['price']);
}

$data = [
'thisWeekTs' => $data_by_user,
'lastWeekTs' => $last_week_data_by_user,
'histoPrice' => $histoPrice
];

echo json_encode($data);
?>