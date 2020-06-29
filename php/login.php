<?php 
	session_start();

	if(isset($_SESSION['user_id'])) {
		header("Location: home.php");
	} else {
	    // do nothing
	}
	include('includes/header.php');
	include('includes/functions.php');
	include('../dashboard/html/dashboard.php');

	$invalid = false;
	if(isset($_GET['invalid_login'])) {
		$invalid = true;
	}


?>

<? if($invalid) { ?>
	<div id="login-error" class="alert alert-danger" role="alert">
		Invalid Login. <a href="./new_user.php">New user?</a> <span style="float: right;"><a id="close-error" href="#" class="alert-link" syle="text-align: right;">close</a></span>
	</div>
<? } ?>

<div class="dashboard">
	
	<div class="chart-row">
		<div class="chart-container" id="login-container"> <!-- set width in chart-container, set height in chart -->
			<div class="chart-header">Welcome Back!</div>
			<div class="chart" id="login-form">
					<div class="enter-price-form">
						<form action="session/session_login.php" method='post'>

							<div class="form-group">
								<input class="form-control" type="text" placeholder="Username" id="username" name="username">
							</div>

							<div class="form-group">
								<input class="form-control" type="password" placeholder="Password" id="password" name="password">
							</div>

							<div class="form-group">
								<button class="btn btn-primary" type="submit">Login</button>
							</div>

						</form>
					</div>
			</div>
			<div class="chart-footer" style="height: 60px;">
				<a href="#" class="footer-link">Forgot Password?</a><br>
				<a href="new_user.php" class="footer-link">New User?</a>
			</div>
		</div>
	</div>

</div>

<?php include('includes/footer.php') ?>

<script>
	var close = $('#close-error');
	close.click(function(){
		$('#login-error').css({'display': 'none'});
	});

</script>