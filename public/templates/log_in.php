<?php
$message = '';
session_start();
require '../../utils/Auth.php';

if (Auth::check()){
    header('location: Auth.php');
    //make sure to exit on a redirect
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    if (Auth::attempt($username, $password)) {
        header('Location: Auth.php');
        die;
    } else {
        $message = "Your username and password are not correct";
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
    <form class="form-horizontal" method="POST" action="login.php">
      <div class="form-group form-group-lg">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group form-group-lg">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
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