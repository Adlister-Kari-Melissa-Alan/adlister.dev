<?php
$_ENV = include __DIR__ . '/../../.env.php';
require_once '../database/db_connect.php';

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
    header('Location: /users/account');
}

?>

<div class="container">
    <h1>Sign up for free!</h1>
        <div class="signinForm">
            <form action="/users/signup" method="POST">
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
</div>