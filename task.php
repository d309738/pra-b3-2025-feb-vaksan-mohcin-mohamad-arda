<?php 
session_start();
if(! isset($_SESSION['user'])) 
{
    header('location: login.php');
    exit();

}

?> 

<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once 'head.php'; ?>
</head>

<body>
    <?php require_once('header.php'); ?>
    <?php require_once 'main.php'; ?>
    <?php require_once('footer.php'); ?>
    <script src="https://kit.fontawesome.com/d6519435b0.js" crossorigin="anonymous"></script>


</body>

</html>