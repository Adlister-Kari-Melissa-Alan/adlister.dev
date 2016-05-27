<?php
$message = '';
session_start();
require '../../utils/Auth.php';
require '../../utils/Input.php';

if (Auth::check()){
    header('location: items_index.php');
    //make sure to exit on a redirect
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = Input::get('username');
    $password = Input::get('password');
    if (Auth::attempt($username, $password)) {
        header('Location: items_index.php');
        die;
    } else {
      $message = "Your username or password are not correct";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Adlister Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <?= $message; ?>
  <?= $_SESSION['ERROR_MESSAGE']?>
    <form class="form-horizontal" method="POST" action="log_in.php">
      <div class="form-group form-group-lg">
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <input name="username" type="text" class="form-control" id="username" placeholder="Username">
        </div>
      </div>
      <div class="form-group form-group-lg">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group form-group-lg">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Log in</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>