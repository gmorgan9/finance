<?php 
	include('functions.php');
  
if (!isLoggedIN()) {
	header('location: login.php');
}
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="fav.png?v=<?php echo time(); ?>">
</head>
<body>
	<div class="header">
		<h2>Dashboard</h2>
  </div>
  <?php include("header.php") ?>
    <div class="main-content">
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>