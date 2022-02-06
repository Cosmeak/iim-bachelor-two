<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h2>Create User</h2>
    <form action="create.php" method="post">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" placeholder="Your firstname..." />
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" placeholder="Your lastname..." />
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Your email..." />
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Your password..." />
        <label for="password">Confirm password</label>
        <input type="password" name="check_password" placeholder="Confirm your password..." />
        <button type="submit">Submit</button>
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
        session_start();
        $_SESSION['user'] = serialize($user);
        header('Location: index.php');
    } else {
        $error = "Passwords aren't the same";
    }
}
if (isset($error)) {
    echo $error;
}

