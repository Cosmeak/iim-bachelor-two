<?php require_once '../includes/import.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All pets</title>
</head>
<body>
<?php
require_once '../includes/header.php' ;
if(isset($session) && $session->getAdmin() == 0)
{
    session_destroy();
    header('Location: ../index.php');
    exit();
}
?>
<main>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>User</th>
            <th>Show</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $pets = new Pet();
        foreach ($pets->index() as $pet)
        { ?>
            <tr>
                <td><?= $pet->getId() ?></td>
                <td><?= $pet->getName() ?></td>
                <td><?= $pet->getCategory() ?></td>
                <td><?= $pet->getUser() ?></td>
                <td><a class="show" href="show.php?id=<?= $pet->getId() ?>">Show</a></td>
                <td><a class="update" href="update.php?id=<?= $pet->getId() ?>">Update</a></td>
                <td><a class="destroy" href="destroy.php?id=<?= $pet->getId() ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</main>
</body>
</html>