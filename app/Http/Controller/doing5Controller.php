<?php
    $action = $_POST['action'];
    if($action == "create")
    {
        $name = $_POST['name'];

        require_once '../../../backend/conn.php';
        $query = "INSERT INTO doing5 (name) VALUES(:name)";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":name"=>$name
        ]);
        header ("Location: ../../../meldingen5/index.php");
    }
    if($action == "edit")
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        require_once '../../../backend/conn.php';
        $query = "UPDATE doing5 SET name = :name WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":name"=>$name,
            ":id"=>$id
        ]);
        header ("Location: ../../../meldingen5/index.php");
    }
    if($action == "delete")
    {
        $id = $_POST['id'];
        require_once '../../../backend/conn.php';
        $query = "DELETE FROM doing5 WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id"=>$id]);
        header ("Location: ../../../meldingen5/index.php");
    }
?>