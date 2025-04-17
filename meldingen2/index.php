<?php
session_start();
if(!isset($_SESSION['user']))
{
    header('location: ../../login.php');
    exit();
 
}
 
?>
<!doctype html>
<html lang="nl">

<head>
    <title></title>
    <?php require_once '../head.php'; ?>
</head>

<body>
    <?php require_once('../header.php'); ?>
    <?php
    require_once '../backend/conn.php';
    $query = "SELECT * FROM todo2";
    $statement = $conn->prepare($query);
    $statement->execute();
    $meldingen = $statement->fetchALL(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
        <main>

            <div class="main_all">
                <div class="wrapper_main">
                    <div class="workers">
                        <div class="workers_tekst">
                            <h2>Workers & Co-Workers</h2>
                            <p>Planner</p>
                        </div>
                    </div>
                </div>

                <div class="all_button">
                    <div class="worker_button"><a href="#">Worker</a></div>
                    <div class="admin_button"><a href="#">Admin</a></div>
                </div>

                <div class="lists">

                    <div class="todo">
                        <h1>TO-DO</h1>
                        <H2>LIST THE PERSON</H2>
                        <?php foreach ($meldingen as $melding): ?>
                            <div class="p">
                                <p><a href="edit.php?id=<?php echo $melding['id'] ?>"><?php echo $melding['name']; ?></a></p>
                            </div>
                        <?php endforeach; ?>
                        <div class="buttons">
                            <a href="create.php">ADD</a>

                        </div>



                    </div>
                    <?php
                    require_once '../backend/conn.php';
                    $query = "SELECT * FROM doing2";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $meldingen = $statement->fetchALL(PDO::FETCH_ASSOC);
                    ?>

                    <div class="doing">

                        <h1>DOING</h1>
                        <H2>LIST THE PERSON</H2>
                        <?php foreach ($meldingen as $melding): ?>
                            <div class="p">
                                <p><a href="edit2.php?id=<?php echo $melding['id'] ?>"><?php echo $melding['name']; ?></a></p>
                            </div>
                        <?php endforeach; ?>
                        <div class="buttons">
                            <a href="create2.php">ADD</a>
                        </div>

                    </div>
                    <?php
                    require_once '../backend/conn.php';
                    $query = "SELECT * FROM done2";
                    $statement = $conn->prepare($query);
                    $statement->execute();
                    $meldingen = $statement->fetchALL(PDO::FETCH_ASSOC);
                    ?>

                    <div class="done">
                        <h1>DONE</h1>
                        <H2>LIST THE PERSON</H2>
                        <?php foreach ($meldingen as $melding): ?>
                            <div class="p">
                                <p><a href="edit3.php?id=<?php echo $melding['id'] ?>"><?php echo $melding['name']; ?></a></p>
                            </div>
                        <?php endforeach; ?>
                        <div class="buttons">
                            <a href="create3.php">ADD</a>
                        </div>

                    </div>

                </div>



            </div>

        </main>


    </div>
    <?php require_once('../footer.php'); ?>
    <script src="https://kit.fontawesome.com/d6519435b0.js" crossorigin="anonymous"></script>


</body>

</html>