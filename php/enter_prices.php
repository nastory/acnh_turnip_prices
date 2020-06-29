<?php 
	include('includes/session.php');
	include('includes/header.php');
	include('includes/functions.php');
	$users = getData('select user_id, user_name from users;');
	$weeks = getData('select week_id, start_date from date_helper_week w where start_date <= date(now()) order by start_date desc');
?>



<div id="post-success" class="alert alert-success" role="alert" style='display: none;'>
	Success! Your new prices have been added <span style='float: right;'><a id="close-alert" href="#" class="alert-link" syle="text-align: right;">close</a></span>
</div>

<div id="post-error" class="alert alert-danger" role="alert" style='display: none;'>
	That didn't work... <span style='float: right;'><a id="close-error" href="#" class="alert-link" syle="text-align: right;">close</a></span>
</div>

<div class="enter-price-form-container">
	<h3 class="form-header">Enter Turnip Sale Price</h3>

	<div class="enter-price-form">
		<div>

			<div class="form-group">
				<label for="user-select">Name:</label>
				<select id="user-select" class="form-control" name='user'>
					<?php
						forEach($users as $user){
							echo "<option value={$user['user_id']}>{$user['user_name']}</option>";
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label for="date-input">Date:</label>
				<input id="date-input" class="form-control" type="date" placeholder="Select Date" name='dat'>
			</div>

			<div class="form-group">
				<label for="tod-select">Time of Day:</label>
				<select id="tod-select" class="form-control" name='time_of_day'>
					<option value="morning">Morning</option>
					<option value="afternoon">Afternoon</option>
				</select>
			</div>

			<div class="form-group">
				<label for="price-input">Price:</label>
				<input id="price-input" class="form-control" type="text" placeholder="Enter Price" name='price'>
			</div>

			<div class="form-group">
				<button class="btn btn-primary" onclick="sendData();">Submit</button>
			</div>

		</div>
	</div>

</div>

<div class="enter-price-form-container">
	<h3 class="form-header">Enter Turnip Purchase Price</h3>

	<div class="enter-price-form">
		<div>

			<div class="form-group">
				<label for="purchase-user-select">Name:</label>
				<select id="purchase-user-select" class="form-control" name='user-purchase'>
					<?php
						forEach($users as $user){
							echo "<option value={$user['user_id']}>{$user['user_name']}</option>";
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label for="purchase-date-input">Date:</label>
				<select id="purchase-date-input" class="form-control" name='week-id'>
					<?php
						forEach($weeks as $week){
							echo "<option value={$week['week_id']}>{$week['start_date']}</option>";
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label for="purchase-price-input">Price:</label>
				<input id="purchase-price-input" class="form-control" type="text" placeholder="Enter Price" name='purchase-price'>
			</div>

			<div class="form-group">
				<button class="btn btn-primary" onclick="sendPurchaseData();">Submit</button>
			</div>

		</div>
	</div>

</div>



<?php
	include('includes/footer.php')
?>

<script>
$('#home-link').removeClass('active');
$('#enter-prices-link').addClass('active');
</script>

<script>
	$('#close-alert').click(function(){
		$('#post-success').css('display', 'none');
	});

	$('#close-error').click(function(){
		$('#post-error').css('display', 'none');
	});
</script>


