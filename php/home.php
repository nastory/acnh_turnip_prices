<?php 
	include('includes/session.php');
	include('includes/header.php');
	include('../dashboard/html/dashboard.php');
?>

<div class="dashboard">

<div class="chart-row">
	<div class="chart-container" id="ts-this-week"> <!-- set width in chart-container, set height in chart -->
		<div class="chart-header">This Week</div>
		<div class="chart" id="ts-this-week-plot"></div>
		<div class="chart-footer">Prices Taken Twice Daily-ish</div>
	</div>
</div>

<div class="chart-row">
	<div class="chart-container" id="price-hist"> <!-- set width in chart-container, set height in chart -->
		<div class="chart-header">Price Distribution</div>
		<div class="chart" id="price-hist-chart"></div>
		<div class="chart-footer">Prices Taken Twice Daily-ish</div>
	</div>

	<div class="chart-container" id="ts-last-week"> <!-- set width in chart-container, set height in chart -->
		<div class="chart-header">Last Week</div>
		<div class="chart" id="ts-last-week-plot"></div>
		<div class="chart-footer">Full Last Week</div>
	</div>
</div>

</div>

<?php include('includes/footer.php') ?>
<script src="../js/home.js"></script>
<script>
$('#home-link').addClass('active');
$('#enter-prices-link').removeClass('active');
</script>
