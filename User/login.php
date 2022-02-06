<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Your email...">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Your password...">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if($_POST)
{
    require_once '../class/User.php';
    $user = new User;
    $user = $user->login($_POST['email'],$_POST['password']);
    session_start();
    $_SESSION['user'] = serialize($user);
    header('Location: show.php?id='.$user->getId());
}