<?php
    require_once '../class/User.php';
    $user = new User();
    $user = $user->show($_GET['id']);
    if($user == null)
    {
        header('Location: index.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $user->getCompleteName() ?> Profile</title>
</head>
<body>
<?php require_once '../includes/header.php' ?>
<main class="profile">
    <article class="card-profile">
        <div class="top-card"></div>
        <div class="middle-card">
            <p>Email: <?= $user->getEmail() ?></p>
            <p>Firstname: <?= $user->getFirstname() ?></p>
            <p>Lastname: <?= $user->getLastname() ?></p>
        </div>
        <div class="bottom-card">
            <?php if (isset($session) && $session->getId() == $_GET['id']) { ?>
                <a class="update" href="update.php?id=<?= $user->getId() ?>">Update</a>
                <a class="destroy" href="destroy.php?id=<?= $user->getId() ?>">Delete</a>
            <?php } ?>
        </div>
    </article>
    </div>
    <div class="pet">
        <h2>Pets</h2>
        <div class="list"></div>
    </div>
</main>
</body>
</html>