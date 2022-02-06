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
<?php require_once '../includes/header.php' ?>
<h2>Pets</h2>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Category</td>
        <td>User</td>
    </tr>
    <?php
    $pets = new Pet();
    foreach ($pets->index() as $pet)
    { ?>
        <tr>
            <td><?= $pet->getId() ?></td>
            <td><?= $pet->getName() ?></td>
            <td><?php if($pet->getCategory()){ echo $pet->getCategory(); }?></td>
            <td><?php if($pet->getUser()){ echo $pet->getUser(); }?></td>
            <td><a href="show.php?id=<?= $pet->getId() ?>">Show</a></td>
            <td><a href="update.php?id=<?= $pet->getId() ?>">Update</a></td>
            <td><a href="destroy.php?id=<?= $pet->getId() ?>">Delete</a></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>