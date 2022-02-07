<?php require_once "../includes/import.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once '../includes/header.php';
if(isset($session) && $session->getAdmin() == 0)
{
    session_destroy();
    header('Location: ../index.php');
}
?>
<main>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Show</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $users = new User();
        foreach ($users->index() as $user)
        { ?>
            <tr>
                <td><?= $user->getId() ?></td>
                <td><?= $user->getEmail() ?></td>
                <td><?= $user->getFirstname() ?></td>
                <td><?= $user->getLastname() ?></td>
                <td><a class="show" href="show.php?id=<?= $user->getId() ?>">Show</a></td>
                <td><a class="update" href="update.php?id=<?= $user->getId() ?>">Update</a></td>
                <td><a class="destroy" href="destroy.php?id=<?= $user->getId() ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</main>
</body>
</html>