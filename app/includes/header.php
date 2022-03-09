<header>
    <a href="/" class="logo">
      <h1 class="logo-text"><span>Morgan</span>Finances</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
    <?php if(!isLoggedIn()){?>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
		  <?php }else{ ?>
        </div>
		  <?php } ?>
      <?php if(isLoggedIn()){?>
      <li><a href="#">
          <i class="fa fa-user"></i>
          <?php echo $_SESSION['user']['username']; ?>
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
        <ul>
        <div id="profilelogout">
          <li><a href="/admin/profileinfo.php">Profile</a></li>
          <li><a href="index.php?logout='1'">Logout</a></li>
        </div>
		  <?php }else{ ?>
		  <?php } ?>
    </div>
    </ul>
</header>