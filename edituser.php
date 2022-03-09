<?php include('functions.php'); ?>

<?php 
if (!isAdmin()) {
	header('location: /');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Create user</title>
	<meta name="viewport" content="width=device-width">
	
	<!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <!-- Admin Styles -->
    <link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">

</head>
<body>
	<div class="log-header">
		<h2>Admin - create user</h2>
	</div>

	<form method="post" action="edituser.php">

		<?php echo display_error(); ?>

        <?php 
        while($row = mysqli_fetch_array($result))
        { ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $row['username']; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $row['email']; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="log-btn" name="register_btn">Create User</button>
			<a href="profileinfo.php" name="btn" class="log-btn">Back</a>
		</div>
	</form>
</body>
</html>