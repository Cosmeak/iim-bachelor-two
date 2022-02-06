<?php
require_once '../class/Database.php';
require_once '../class/User.php';
require_once '../class/Pet.php';
session_start();
if (isset($_SESSION['user'])) {
    $session = unserialize($_SESSION['user']);
}
else {
    header('Location: ../user/login.php');
}
?>
<link rel="stylesheet" href="../style.css">
<script src="https://kit.fontawesome.com/28c63ecd3f.js" crossorigin="anonymous"></script>
<header>
    <div>
        <img src="../img/logo.png" alt="">
        <p><?= $session->getCompleteName() ?></p>
    </div>
    <nav>
        <ul>
            <li><i class="fas fa-user-circle"></i><a href="show.php?id=<?= $session->getId() ?>">My profile</a></li>
            <li><i class="fas fa-paw"></i><a href="">Adopt an animal</a></li>
            <li><i class="fas fa-sign-out-alt"></i><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>