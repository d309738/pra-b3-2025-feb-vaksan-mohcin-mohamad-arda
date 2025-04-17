<?php
require_once 'backend/config.php';
?>
<header>
    <link rel="stylesheet" href="css/main.css">
    <div class="container2">
        <h1>Takenlijst</h1>
        <nav>
            <a href="/index.php">Home</a>
            <div class="dropdown">
            <button class="dropdown-btn">Dropdown</button>
                <div class="dropdown-content">
                    <a href="<?php echo $base_url; ?>/meldingen/index.php">User 1</a>
                    <a href="<?php echo $base_url; ?>/meldingen2/index.php">User 2</a>
                    <a href="<?php echo $base_url; ?>/meldingen3/index.php">User 3</a>
                    <a href="<?php echo $base_url; ?>/meldingen4/index.php">User 4</a>
                    <a href="<?php echo $base_url; ?>/meldingen5/index.php">User 5</a>
                </div>
            </div>
            <a href="../login.php">Log in</a>
            <a href="../register.php">Registeren</a>
        </nav>
 
    </div>
</header>