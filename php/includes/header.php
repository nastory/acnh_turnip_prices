<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Stalk Market</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../dashboard/css/dashboard.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">The Stalk Market <i class="fa fa-leaf"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" id="home-link" href="home.php">Home</a>
      <a class="nav-item nav-link" id="enter-prices-link" href="enter_prices.php">Enter Prices</a>
    </div>
    <div class="navbar-nav ml-auto">

      <?php 
      if(isset($_SESSION['user_id'])){
        echo('<a class="nav-item nav-link" id="login-link" href="session/session_logout.php">Logout</a>');
      } else {
        echo('<a class="nav-item nav-link" id="login-link" href="login.php">Login</a>');
        echo('<a class="nav-item nav-link" id="login-link" href="new_user.php">Sign Up</a>');
      } 
      ?>

      
    </div>
  </div>
</nav>