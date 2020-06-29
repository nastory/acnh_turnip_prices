<?php

include('../../php/includes/functions.php');

$username = $_GET['username'];
$passwd = $_GET['pwd'];

$users = getData('select user_name from users;');
$user_list = [];

forEach($users as $user) {
	array_push($user_list, $user['user_name']);
}

if(in_array($username, $user_list)) {
	echo('user_exists');
	die();
}

$passwd = password_hash($passwd, PASSWORD_DEFAULT);

postCreateUser($username, $passwd);

?>