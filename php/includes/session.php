<?php 

session_start();

if ( isset( $_SESSION['user_id'] ) ) {
	// do nothing
} else {
    header("Location: login.php");
}

?>