<?php include("/app/database/functions.php");
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Info</title>
	<meta name="viewport" content="width=device-width">
	
	<!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
    <!-- Admin Styles -->
    <link rel="stylesheet" href="assets/css/admin.css?v=<?php echo time(); ?>">

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
	<div class="log-header">
		<h2>Profile Information</h2>
	</div>
	<div class="message-content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
		<?php if(isAdmin())
		{
		?>
			<img src="assets/images/admin.png">
		<?php }else{ ?>
			<img src="assets/images/profile.png">
		<?php } ?>
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  class="profile-user">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<?php if(isAdmin())
						{
						?>
      						<a href="index.php?logout='1'"><button class="log-btn">Logout</button></a>
							<a href="/"><button class="log-btn">Home</button></a>
							<a href="/admin/users/create.php"><button class="log-btn">Add User</button></a>
							<a href="/admin/users/index.php"><button class="log-btn">Users</button></a>
							<a href="/admin/users/resetpassword.php"><button class="log-btn">Reset Password</button></a>
						<?php }else{ ?>
							<a href="index.php?logout='1'"><button class="log-btn">Logout</button></a>
							<a href="/"><button class="log-btn">Home</button></a>
							<a href="/admin/users/resetpassword.php"><button class="log-btn">Reset Password</button></a>
						<?php } ?>
					</small>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>