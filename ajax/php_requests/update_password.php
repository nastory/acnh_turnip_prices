<?php 

include('../../php/includes/functions.php');

$username = $_GET['username'];
$new_password = $_GET['passwd'];

$passwd_hash = password_hash($new_password, PASSWORD_DEFAULT);

updatePassword($username, $passwd_hash);

?>