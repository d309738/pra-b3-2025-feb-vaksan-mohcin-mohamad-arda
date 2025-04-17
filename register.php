<?php require_once('head.php') ?>
<?php require_once('header.php') ?>

<body>
    <div class="all">

        <div class="form">

            <h1>Registeren</h1>

            <?php if (isset($_GET['msg'])) {
                echo "<div class='msg'>" . $_GET['msg'] . "</div>";
            } ?>

            <form action="../app/Http/Controller/registerController.php" method="post">

                <div class="formgroup">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="formgroup_list">
                    <select name="status">
                        <option value="">Kies een afdeling!</option>
                        <option value="groep-a">Groep-A</option>
                        <option value="groep-b">Groep-B</option>
                    </select>
                </div>

                <div class="formgroup">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password">
                </div>

                <div class="formgroup">
                    <label for="password_check">Wachtwoord (Controle)</label>
                    <input type="password" name="password_check" id="password_check">
                </div>

                <div class="formgroup">
                    <input type="Submit" value="Registeren">
                </div>

            </form>

        </div>

        <div class="background">
            <img src="img/logo-big-fill-only.png" alt="iMG" width="630px">
        </div>
    </div>



</body>

</html>