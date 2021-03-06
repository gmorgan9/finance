<?php include("functions.php"); ?>

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
        
    <?php include("includes/header.php") ?>

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">
        
<!-- Admin Content -->
<div class="admin-content">
<div class="content">
    <h2 class="log-header">Edit User</h2>
 

<?php
$con=mysqli_connect("localhost","gmorg","gmorgpass","finances");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = mysqli_query($con,"SELECT * FROM users");
$getID = mysqli_fetch_array($id);

$result = mysqli_query($con,"SELECT * FROM users WHERE id = '" . $getID['id'] . "'");

?>

    <form action="edituser.php" method="post">
        <input type="hidden" name="id" value="" >

        <?php
        while($row = mysqli_fetch_array($result))
            { 
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['user_type'] . "</td>";
                ?> 
                ?>
        <div>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo . $row['username']. ?>" class="text-input">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="" class="text-input">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" value="" class="text-input">
        </div>
        <div>
            <label>Password Confirmation</label>
            <input type="password" name="passwordConf" value="" class="text-input">
        </div>
        <div>
                            <?php if (isset($admin) && $admin == 1): ?>
                                <label>
                                    <input type="checkbox" name="admin" checked>
                                    Admin
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="admin">
                                    Admin
                                </label>
                            <?php endif; ?>
                            
                        </div>
        <div>
            <button type="submit" name="update-user" class="btn btn-big">Update User</button>
        </div>
    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <!-- <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <!-- Ckeditor -->
        <!-- <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script> -->
        <!-- Custom Script -->
        <!-- <script src="../../assets/js/scripts.js"></script> -->

    </body>

</html>