<?php
$message = '';
// session_start();
// require '../utils/Auth.php';
// require '../utils/Input.php';

if (Auth::check()){
    header('location: /ads/index');
    //make sure to exit on a redirect
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = Input::get('username');
    $password = Input::get('password');
    if (Auth::attempt($username, $password)) {
        header('Location: /ads/index');
        die;
    } else {
      $message = "Your username or password are not correct";
    }
}
?>

<div class="container">
  <?= $message; ?>

    <form class="form-horizontal" method="POST" action="/users/login">
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