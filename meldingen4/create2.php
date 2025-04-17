<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../head.php'; ?>
</head>

<body>
    <?php require_once('../header.php'); ?>
    <form action="../app/Http/Controller/doing4Controller.php" method="post">
        <input type="hidden" name="action" value="create">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <input type="submit" value="ADD">
    </form>
    <?php require_once('../footer.php'); ?>
    <script src="https://kit.fontawesome.com/d6519435b0.js" crossorigin="anonymous"></script>
</body>

</html>