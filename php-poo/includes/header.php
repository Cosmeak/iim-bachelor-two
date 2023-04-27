<?php
if (isset($_SESSION['user'])) {
    $session = unserialize($_SESSION['user']);
}
else {
    header('Location: ../user/login.php');
    exit();
}
?>
<link rel="stylesheet" href="../style.css">
<script src="https://kit.fontawesome.com/28c63ecd3f.js" crossorigin="anonymous"></script>
<header>
    <div>
        <img src="../img/logo.png" alt="">
        <p><?= $session->getCompleteName().'<br>'.($session->getAdmin() == 1 ? 'Admin' : 'User') ?></p>
    </div>
    <nav>
        <ul>
            <li><i class="fas fa-user-circle"></i><a href="../user/show.php?id=<?= $session->getId() ?>">My profile</a></li>
            <?php echo $session->getAdmin() == 1 ? '<li><i class="fas fa-users"></i><a href="../user/index.php">All Users</a></li>' : "" ?>
            <?php echo $session->getAdmin() == 1 ? '<li><i class="fas fa-paw"></i><a href="../pet/index.php">All pets</a></li>' : "" ?>
            <li><i class="fas fa-egg"></i><a href="../pet/create.php">Add pet</a></li>
            <?php echo $session->getAdmin() == 1 ? '<li><i class="fas fa-box-open"></i><a href="../category/index.php">All Pet Categories</a></li>' : "" ?>
            <?php echo $session->getAdmin() == 1 ? '<li><i class="fas fa-parachute-box"></i><a href="../category/create.php">Create Pet Categories</a></li>' : "" ?>
            <li><i class="fas fa-sign-out-alt"></i><a href="../user/logout.php">Logout</a></li>
        </ul>
    </nav>
</header>