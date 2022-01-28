<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your profile</title>
</head>
<body>
<?php
    require_once 'User.php';
    session_start();

    $user = unserialize($_SESSION['user']);
    echo($user->firstname);
?>
</body>
</html>