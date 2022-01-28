<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <input type="hidden" name="request" value="login">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <button type="submit">Submit</button>
    </form>

    <h2>Register</h2>
    <form action="" method="post">
        <input type="hidden" name="request" value="register">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="password" name="password-verify" placeholder="Confirm your password" required>
        <input type="text" name="firstname" placeholder="Enter your firstname" required>
        <input type="text" name="lastname" placeholder="Enter your lastname" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php
require_once 'Database.php';
require_once 'User.php';
session_start();

if($_POST)
{
    match($_POST['request']){
        'login' => login(),
        'register' => register()
    };
}

function register()
{
    $db = new Database();
    if($_POST['password'] === $_POST['password-verify'])
    {
        $user = new User($_POST['email'], $_POST['password'], $_POST['firstname'], $_POST['lastname']);
        $db->saveUser($user);
        $_SESSION['user'] = serialize($user);
        header('Location: profile.php');
    }
    else
    {
        echo 'Your password aren\'t the same';
    }
}

function login()
{
    $db = new Database();
    $user = $db->getUserbyEmail($_POST['email'], $_POST['password']);
    if(gettype($user) !== 'string')
    {
        $_SESSION['user'] = serialize($user); // need to be unserialize to used
        print_r($_SESSION['user']);
        header('Location: profile.php');
    }
    else
    {
        print_r($user);
    }
}