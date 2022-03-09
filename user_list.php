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


        


        <table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>User Type</th>
        </tr>
    </thead>
    <tbody>
        <?php


$sql = "SELECT * FROM users";
$result = mysqli_query($db, $sql) or die("error");
if(mysqli_num_rows($result) > 0) {
    while($users = mysqli_fetch_assoc($result)) {
        $id = $users['id'];
        $username = $users['username'];
        $email = $users['email'];
        $user_type = $users['user_type'];
    }
}
?>

<?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">edit</a></td>
        <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">delete</a></td>
    </tr>
<?php endforeach; ?>

<td><?php echo $id; ?></td>
<td><?php echo $username; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $user_type; ?></td>

</tbody>
</table>



</body>
</html>