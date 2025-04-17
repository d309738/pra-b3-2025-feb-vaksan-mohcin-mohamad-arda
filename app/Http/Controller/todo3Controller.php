<?php
    $action = $_POST['action'];
    if($action == "create")
    {
        $name = $_POST['name'];

        require_once '../../../backend/conn.php';
        $query = "INSERT INTO todo3 (name) VALUES(:name)";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":name"=>$name
        ]);
        header ("Location: ../../../meldingen3/index.php");
    }
    if($action == "edit")
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        require_once '../../../backend/conn.php';
        $query = "UPDATE todo3 SET name = :name WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":name"=>$name,
            ":id"=>$id
        ]);
        header ("Location: ../../../meldingen3/index.php");
    }
    if($action == "delete")
    {
        $id = $_POST['id'];
        require_once '../../../backend/conn.php';
        $query = "DELETE FROM todo3 WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id"=>$id]);
        header ("Location: ../../../meldingen3/index.php");
    }
?>