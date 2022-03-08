<?php
session_start();

    // connect to the database
    $db = mysqli_connect("localhost","gmorg","gmorgpass","finances");

    if(!$db){
        die("connection error...".mysqli_connect_error());
    }else{
        echo "You are successfully connected.";
    }
session_start();
// after form submitted insert values in to tables.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($db,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($db,$password);
	//Checking for user already exist in the table or not
        $query = "SELECT * FROM `registration` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($db,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username OR Password is incorrect.</h3>
<br/><a href='login.php'>Login</a></div>";
	}
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<body>

<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="User Name" required>
<br>
<input type="password" name="password" placeholder="Password" required>
<br>
<input name="submit" type="submit" value="Login">
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
</body>
</html>