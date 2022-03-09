<!-- <header>
  <a href="/" class="logo">
    <h1 class="logo-text"><span>Garrett</span>Inspires</h1>
  </a>
  <i class="fa fa-bars menu-toggle"></i>
    
    </div>
    <hr style="width:50%">
    
</header> -->



  <header>
    <a href="/" class="logo">
      <h1 class="logo-text"><span>Garrett</span>Inspires</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <div class="nav-list-log">
          <ul class="nav">
      <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="transactions.php">Transactions</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="expenses.php">Expenses</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="income.php">Income</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="budget.php">Budget</a></li>
      <?php if(isLoggedIn()){?>
        <div id="profilelogout">
          <li class="nav-list-item"><a id="profile" href="profileinfo.php">Profile</a></li>
          <li class="nav-list-item"><a id="logout" href="index.php?logout='1'">Logout</a></li>
        </div>
		  <?php }else{ ?>
        <div id="loginreg">
          <li class="nav-list-item"><a id="login" href="login.php">Login</a></li>
          <li class="nav-list-item"><a id="register" href="register.php">Register</a></li>
        </div>
		  <?php } ?>
    </div>
    </ul>
</header>