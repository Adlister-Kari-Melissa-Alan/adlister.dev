<?php
$_ENV = include __DIR__ . '/../../.env.php';
require_once '../../database/db_connect.php';
include '../../views/partials/navbar.php';
include '../footer.php';

if($_SERVER['REQUEST_METHOD']==='POST') {

    $name = ($_POST['name']);
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $confirm = ($_POST['confirm']);

    if(!empty($name) && !empty($username) && !empty($email) && !empty($password) && !empty($confirm) && $password == $confirm) {

        $query = "INSERT INTO users(name, email, username, password) VALUES(:name, :email, :username, :password)";
        $stmt = $dbc->prepare($query);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $stmt->execute();
    }
    header('Location: user_profile.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Adlister Sign-Up</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Sign up for free!</h1>
        <form action="sign_up.php" method="POST">
            <div class="form-group form-group-lg">
            <input type="text" class="form-control" placeholder="NAME" name="name"></div>
            <div class="form-group form-group-lg">
            <input type="text" class="form-control" placeholder="USERNAME" name="username"></div>
            <div class="form-group form-group-lg">
            <input type="email" class="form-control" placeholder="EMAIL" name="email"></div>
            <div class="form-group form-group-lg">
            <input type="password" class="form-control" placeholder="PASSWORD" name="password"></div>
            <div class="form-group form-group-lg">
            <input type="password" class="form-control" placeholder="CONFIRM PASSWORD" name="confirm"></div>
            <button type="submit" class="btn btbn-default" name="sumbit">Submit</button>
        </form>
    </div>

</body>
</html>