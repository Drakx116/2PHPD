<?php
    session_start();
    require_once '../vendor/autoload.php';

    $pseudo = $_SESSION['pseudo'] ?? 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Home </title>
</head>

<body>
    <?php require_once './templates/navbar.php' ?>
    <h2> Awesome <?= $pseudo ?> </h2>
</body>
</html>