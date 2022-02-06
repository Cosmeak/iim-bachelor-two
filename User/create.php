<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Register</title>
</head>
<body class="login-register">
    <form action="create.php" method="post">
        <img src="../img/logo.png" alt="">
        <h2>Register</h2>
        <input type="text" name="firstname" placeholder="Your firstname..." />
        <input type="text" name="lastname" placeholder="Your lastname..." />
        <input type="email" name="email" placeholder="Your email..." />
        <input type="password" name="password" placeholder="Your password..." />
        <input type="password" name="check_password" placeholder="Confirm your password..." />
        <button type="submit">Submit</button>
        <a href="login.php">Have an account ?</a>
    </form>

</body>
</html>

<?php
require_once '../class/User.php';
require_once '../class/Database.php';
if ($_POST) {
    if($_POST['password'] === $_POST['check_password'])
    {
        $user = new User();
        $user->setEmail($_POST['email'] );
        $user->setPassword($_POST['password'] );
        $user->setFirstname($_POST['firstname']);
        $user->setLastname($_POST['lastname'] );
        $user = $user->store();
        header('Location: login.php');
    } else {
        $error = "Passwords aren't the same";
    }
}
if (isset($error)) {
    echo $error;
}

