<?php
require_once '../class/Pet.php';
$pet = new Pet();
$pet->destroy($_GET['id']);
header('Location: index.php');