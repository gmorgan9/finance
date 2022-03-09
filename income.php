<?php include("app/database/functions.php");
  
if (!isLoggedIN()) {
	header('location: login.php');
}
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Income</title>
    <meta name="viewport" content="width=device-width">
    
    <link rel="icon" type="image/x-icon" href="fav.png?v=<?php echo time(); ?>">

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

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

</head>
<body>
<?php include("app/includes/header.php") ?>

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

<?php include("app/includes/sidebar.php") ?>
        
<!-- Admin Content -->
<div class="admin-content">

<div class="content">

    <h2 class="page-title">Income</h2>

   





</div>
<!-- // Admin Content -->

</div>
<!-- // Page Wrapper -->





</body>
</html>