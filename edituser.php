<!DOCTYPE html>
<html>
<head>
	<title>Profile Info</title>
	<meta name="viewport" content="width=device-width">
	
	<!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <!-- Admin Styles -->
    <link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">

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

    <h2 class="page-title">Expenses</h2>
                <div class="content">

                    <h2 class="page-title">Edit User</h2>

                    <form action="edit.php" method="post">
                        <input type="hidden" name="id" value="" >
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" value="" class="text-input">
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
                            
                                <label>
                                    <input type="checkbox" name="admin" checked>
                                    Admin
                                </label>
                            
                                <label>
                                    <input type="checkbox" name="admin">
                                    Admin
                                </label>
                          
                            
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
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <!-- <script src="../../assets/js/scripts.js"></script> -->

    </body>

</html>