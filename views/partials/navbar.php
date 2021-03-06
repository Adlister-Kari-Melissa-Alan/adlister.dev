
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">KAM LISTINGS</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="/ads/index">Items</a></li>
          <?php if (Auth::check()) { ?>
            <li><a href="/users/account?id=<?= Auth::id() ?>">Account</a></li>
            <li><a href="/logout.php">Logout</a></li>
            <li><a href="/ads/create<?php  ?>">Post Ad</a></li>
          <?php } else { ?>
            <li><a href="/users/signup">Sign Up</a></li>
            <li><a href="/users/login">Log In</a></li>
          <?php } ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
