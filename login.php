<?php require_once('head.php') ?>
<?php require_once('header.php') ?>

<body>
    <div class="all">

        <div class="form">

            <h1>Log In</h1>

            <form action="../pra-b3-2025-feb-vaksan-mohcin-mohamad-arda/App/Http/Controller/loginController.php" method="post">

            <div class="formgroup">
                <label for="username">Gebruikersnaam</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="formgroup">
                <label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="formgroup">
                <input type="Submit" value="Log in">
            </div>

            </form>
            
        </div>

        <div class="background">
            <img src="img/logo-big-fill-only.png" alt="iMG" width="630px">
        </div>
    </div>

    
    
</body>
</html>