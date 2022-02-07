<?php
require_once '../includes/import.php';
if ($_POST) {
    $petCategory = new PetCategory();
    $petCategory->setlabel($_POST['label']);
    $petCategory->store();
}
?>
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
if(isset($session) && $session->getAdmin() == 0)
{
    session_destroy();
    header('Location: ../index.php');
}
?>
<main class="create">
    <form action="create.php" method="post">
        <input type="text" name="label" placeholder="label" required/>
        <button type="submit">Submit</button>
    </form>
</main>
</body>
</html>