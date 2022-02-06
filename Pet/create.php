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
<?php
include '../includes/header.php';
$categories = new PetCategory();
$categories = $categories->index();
?>
<main>
    <form action="create.php" method="post">
        <input type="text" name="name" placeholder="Your pet name..." required/>
        <select name="category" required>
            <option value="">Choose a category</option>
            <?php
            foreach ($categories as $category)
            { ?>
                <option value="<?= $category->getId() ?>"><?= $category->getLabel() ?></option>
            <?php } ?>
        </select>
        <button type="submit">Submit</button>
    </form>
</main>
</body>
</html>

<?php
if ($_POST) {
    $pet = new Pet();
    $pet->setName($_POST['name']);
    $pet->setCategoryId($_POST['category']);
    $pet->setUserId((int)$session->getId());
    $pet->store();
}


