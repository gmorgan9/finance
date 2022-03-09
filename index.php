<?php include("functions.php");
  
if (!isLoggedIN()) {
	header('location: login.php');
}
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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
<?php include("includes/header.php") ?>

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

<?php include("includes/sidebar.php") ?>
        
<!-- Admin Content -->
<div class="admin-content">

<div class="content">

    <h2 class="page-title">Dashboard</h2>

    <div class="dash-cards">
  <div class="card" id="currexp" style="width: 18rem;">
  <div class="card-body">
    <img src="calendar.png" alt="" style="height: 45px; width: 45px;">
    <h5 class="card-title">Current Expenses</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card" id="currinc" style="width: 18rem;">
  <div class="card-body">
  <img src="calendar.png" alt="" style="height: 45px; width: 45px;">
    <h5 class="card-title">Current Income</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card" id="totexp" style="width: 18rem;">
  <div class="card-body">
  <img src="comparrows.png" alt="" style="height: 45px; width: 45px;">
    <h5 class="card-title">Total Expenses</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card" id="totinc" style="width: 18rem;">
  <div class="card-body">
  <img src="balance.png" alt="" style="height: 45px; width: 45px;">
    <h5 class="card-title">Total Income</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
  </div>

</div>

</div>
<!-- // Admin Content -->

</div>
<!-- // Page Wrapper -->





</body>
</html>