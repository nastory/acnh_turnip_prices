<?php 
	include('includes/header.php');
	include('includes/functions.php');
	include('../dashboard/html/dashboard.php');
?>

<div id="create-users-error" class="alert alert-danger" role="alert" style='display: none;'>
	Something went wrong. Failed to create profile. <span style='float: right;'><a id="close-error" href="#" class="alert-link" syle="text-align: right;">close</a></span>
</div>

<div class="dashboard">
	
	<div class="chart-row">
		<div class="chart-container" id="login-container"> <!-- set width in chart-container, set height in chart -->
			<div class="chart-header">Register</div>
			<div class="chart" id="login-form">
					<div class="enter-price-form">
						<div>

							<div style="color: red; display: none;" id="username_check">Username must contain 5 characters and at least one letter</div>
							<div style="color: red; display: none;" id="user_exists">That username was taken</div>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Username" id="username">
							</div>

							<div style="color: red; display: none;" id="password_strength_message">This password isn't very strong...</div>
							<div style="color: red; display: none;" id="password_username_message">Password cannot be the same as username</div>
							<div class="form-group">
								<input class="form-control" type="password" placeholder="Password" id="password">
							</div>

							<div style="color: red; display: none;" id="confirm_password_message">Passwords do not match</div>
							<div class="form-group">
								<input class="form-control" type="password" placeholder="Confirm Password" id="confirm_password">
							</div>

							<div class="form-group">
								<button disabled class="btn btn-primary" onclick="createUser();" id="create_user_btn">Create Account</button>
							</div>

						</div>
					</div>
			</div>
			<div class="chart-footer" style="height: 35px;">
				<a href="login.php" class="footer-link">Already have an account?</a><br>
			</div>
		</div>
	</div>

</div>

<script src="../js/new_user.js"></script>

<script>
	const params = new URLSearchParams(window.location.search);
	if(params.get('userexists')) {
		document.getElementById('user_exists').style.display = 'block';
	}
</script>

<?php include('includes/footer.php') ?>