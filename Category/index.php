<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Pet Categories</title>
</head>
<body>
<?php require_once '../includes/header.php' ?>
<main>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Label</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $petCategories = new PetCategory();
        foreach ($petCategories->index() as $category)
        { ?>
            <tr>
                <td><?= $category->getId() ?></td>
                <td><?= $category->getLabel() ?></td>
                <?php if(isset($session) && $session->getAdmin()) { ?>
                    <td><a class="destroy" href="destroy.php?id=<?= $pet->getId() ?>">Delete</a></td>
                <?php }?>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</main>
</body>
</html>