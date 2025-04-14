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
                <div class="worker_button"><a href="*">Worker</a></div>
                <div class="admin_button"><a href="index.php">Admin</a></div>
            </div>

            <?php
            require_once "../backend/conn.php";
            $query = "SELECT * FROM users";

            $statement = $conn->prepare($query);

            $statement->execute([]);
            $workers = $statement->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <div class="lists">

                <div class="doing">
                    <h1>WORKERS</h1>
                    <H2>LIST THE PERSON</H2>
                    <div class="p">
                        <?php foreach ($workers as $worker): ?>
                            <p><?php echo $worker['naam']; ?></p>
                            <p><?php echo $worker['username']; ?></p>
                            <a href='edit.php?id=<?php echo $worker['id']; ?>'>aanpassen</a>
                        <?php endforeach; ?>

                    </div>
                    <div class="buttons">
                        <button type="button">ADD</button>
                        <a href="#"></a>
                        <button type="button">DELETE</button>
                        <button type="button">CHANGE</button>
                    </div>

                </div>

            </div>



        </div>

    </main>


</div>