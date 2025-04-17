<<<<<<< HEAD
<?php 
session_start();
if(!isset($_SESSION['user'])) 
=======
<<<<<<<< HEAD:index.php
<!DOCTYPE html>
<html lang="en">
 
========
<?php 
session_start();
if(! isset($_SESSION['user'])) 
>>>>>>> dc6a87586925f8e5320d2a3923b0d4b4c9d78489
{
    header('location: login.php');
    exit();

}

?> 

<!doctype html>
<html lang="nl">

<<<<<<< HEAD
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

=======
>>>>>>>> dc6a87586925f8e5320d2a3923b0d4b4c9d78489:task.php
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
 
<body>
    <?php
        require_once('header.php');
    ?>
 
<div class="container4">
    <div class="background">
        <div class="content">
        <img src="img/logo-big-fill-only.png" alt="iMG" width="300px">
            <div class="info">
           
                <h2>Wij bieden een takenlijst voor onze medewerkers zodat ze snel aan de slag kunnen</h2>
                <p>Elke dag duidelijkheid over wat er moet gebeuren gestructureerd en overzichtelijk.</p>
                <p>Geen verwarring meer, geen tijdverlies. Gewoon meteen weten waar je aan toe bent.</p>
            </div>
        </div>
    </div>
</div>
   
 
    <?php
        require_once('footer.php');
    ?>
    <script src="https://kit.fontawesome.com/d6519435b0.js" crossorigin="anonymous"></script>
</body>
 
 
 
>>>>>>> dc6a87586925f8e5320d2a3923b0d4b4c9d78489
</html>