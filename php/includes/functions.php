<?php 

function dbConnect() {
	$con = mysqli_connect('localhost', 'root', '', 'turnips');

	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}

	return $con;
}


function getData($query) {

	$con = dbConnect();

	$result = mysqli_query($con,$query);
	$data = $result->fetch_all(MYSQLI_ASSOC);
	mysqli_close($con);

	return $data;

}

function postData($dat, $user, $price) {

	$con = dbConnect();

	$stmt = $con->prepare("REPLACE INTO turnip_prices (dat, user_id, price) VALUES (?, ?, ?)");
	if(!$stmt) {
		die('sql error');
	}
	$stmt->bind_param("sss", $dat, $user, $price);

	$stmt->execute();
	$stmt->close();
	$con->close();

	echo 'success';
}

function postPurchaseData($week_id, $user, $price) {

	$con = dbConnect();

	$stmt = $con->prepare("REPLACE INTO purchase_prices (week_id, user_id, purchase_price) VALUES (?, ?, ?)");
	if(!$stmt) {
		die('sql error');
	}
	$stmt->bind_param("sss", $week_id, $user, $price);

	$stmt->execute();
	$stmt->close();
	$con->close();

	echo 'success';
}

function postCreateUser($user_name, $passwd) {

	$con = dbConnect();

	$stmt = $con->prepare("INSERT INTO users (user_name, passwd) VALUES (?, ?)");
	if(!$stmt) {
		die('sql error');
	}
	$stmt->bind_param("ss", $user_name, $passwd);

	$stmt->execute();
	$stmt->close();
	$con->close();

	echo 'success';
}


function updatePassword($user_name, $passwd) {

	$con = dbConnect();

	$stmt = $con->prepare("UPDATE users SET passwd = ? WHERE user_name = ?;");
	if(!$stmt) {
		die('sql error');
	}
	$stmt->bind_param("ss", $user_name, $passwd);

	$stmt->execute();
	$stmt->close();
	$con->close();

	echo 'success';

}


?>