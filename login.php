<?php include('/app/database/functions.php'); ?>

<?php
if (isLoggedIN()) {
	header('location: /');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/x-icon" href="fav.png?v=<?php echo time(); ?>">

	<!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <!-- Admin Styles -->
    <link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">

	<!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
    rel="stylesheet">
    
</head>
<body>
<?php include("app/includes/header.php") ?>
	<div class="log-header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="log-btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>