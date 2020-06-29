<?php

session_start();

if(!empty($_POST)) {
    if(isset($_POST['username']) && isset($_POST['password'])) {

        $con = new mysqli('localhost', 'root', '', 'turnips');
        $stmt = $con->prepare("SELECT * FROM users WHERE user_name = ?");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
    	if(password_verify($_POST['password'], $user->passwd)) {
    	//if($_POST['password'] == $user->passwd) {
    		$_SESSION['user_id'] = $user->user_id;
    		header('Location: ../home.php');
    	} else {
    		 header('Location: ../login.php?invalid_login=true');
    	}
    }
}

?>