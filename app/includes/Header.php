<header>
    <a class="logo" href="<?php echo BASE_URL . '/'; ?>">
        <h1 class="logo-text"><span>Garrett</span>Inspires</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      
            <li>
            <a href="/">
            <i class="fa fa-globe"></i>
            Public</a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                <?php if(isLoggedIn()){?>
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                    <?php }else{ ?>
                    <li><a href="<?php echo BASE_URL . '/login.php'; ?>" class="logout">Login</a></li>
                    <!-- <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Register</a></li> -->
                    <?php } ?>
                </ul>
            </li>
     
    </ul>
</header>