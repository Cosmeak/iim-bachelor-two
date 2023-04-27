<?php
require_once '../class/User.php';
$user = new user();
$user->destroy($_GET['id']);
header('Location: index.php');