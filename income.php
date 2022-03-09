<?php 
	include('functions.php');
  
if (!isLoggedIN()) {
	header('location: login.php');
}
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Income</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="fav.png?v=<?php echo time(); ?>">

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
  <?php include("header.php") ?>
    <div class="main-content">
        <p>
            income page
        </p>
    </div>
</body>
</html>