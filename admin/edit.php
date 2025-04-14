<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once '../head.php'; ?>
</head>

<body>
    <?php
        $id = $_GET['id'];
        require_once "../backend/conn.php";
        $query = "SELECT * from taken WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":id" => $id
        ]);
        $workers = $statement->fetch(PDO::FETCH_ASSOC);
    ?>

    <?php require_once('../header.php'); ?>
    <?php require_once '../main.php'; ?>
    <?php require_once('../footer.php'); ?>
    <script src="https://kit.fontawesome.com/d6519435b0.js" crossorigin="anonymous"></script>


</body>

</html>