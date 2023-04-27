<?php
session_start();
if($_POST)
{
    require_once '../class/User.php';
    $user = new User;
    $user = $user->login($_POST['email'],$_POST['password']);
    $_SESSION['user'] = serialize($user);
    header('Location: show.php?id='.$user->getId());
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Login</title>
</head>
<body class="login-register">
    <form action="login.php" method="post">
        <img src="../img/logo.png" alt="">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Your email...">
        <input type="password" name="password" placeholder="Your password...">
        <button type="submit">Submit</button>
        <a href="create.php">Need an account ?</a>
    </form>
</body>
</html>