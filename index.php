<?php 
	include('functions.php');
  include('path.php');
  
if (isLoggedIN()) {
	header('location: login.php');
}
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <!-- <link rel="icon" type="image/x-icon" href="logo.png"> -->
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	
        
        </div>

        <?php include(ROOT_PATH . "header.php") ?>
        

    <div class="main-content">
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>