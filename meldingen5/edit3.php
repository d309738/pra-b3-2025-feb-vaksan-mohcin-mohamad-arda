<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once '../head.php'; ?>
</head>

<body>
    <?php

    if (!isset($_GET['id'])) {
        echo "Geef in je aanpaslink op de index.php het id van betreffende item mee achter de URL in je a-element om deze pagina werkend te krijgen na invoer van je vijfstappenplan";
        exit;
    }
    ?>
    <?php require_once('../header.php'); ?>

    <?php
    //Haal het id uit de URL:
    $id = $_GET['id'];

    //1. Haal de verbinding erbij
    require_once '../backend/conn.php';

    //2. Query, vul deze aan met een WHERE zodat je alleen de melding met dit id ophaalt
    $query = "SELECT * FROM done5 WHERE id = :id";

    //3. Van query naar statement
    $statement = $conn->prepare($query);

    //4. Voer de query uit, voeg hier nog de placeholder toe
    $statement->execute([
        ":id" => $id
    ]);

    //5. Ophalen gegevens, tip: gebruik hier fetch().
    $meldingen = $statement->fetch(PDO::FETCH_ASSOC);

    ?>

    <form action="../app/Http/Controller/done5Controller.php" method="post">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <form-group>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $meldingen['name']; ?>">
        </form-group>
        <input type="submit" value="Change">
    </form>

    <form action="../app/Http/Controller/done5Controller.php" method="post">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Delete">
    </form>

    <?php require_once('../footer.php'); ?>
    <script src="https://kit.fontawesome.com/d6519435b0.js" crossorigin="anonymous"></script>


</body>

</html>