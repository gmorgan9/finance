<?php 
	include('functions.php');
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
	<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">

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


        
        <?php
$con=mysqli_connect("localhost","gmorg","gmorgpass","finances");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users ORDER by id");

?>
<table style="border=1">
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>User Type</th>
        <th colspan="2">Action</th>
    </thead>
<?php
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['user_type'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>



</body>
</html>