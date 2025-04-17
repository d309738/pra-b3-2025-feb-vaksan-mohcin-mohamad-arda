<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$password_check = $_POST['password_check'];
$status = $_POST['status'];

require_once "../../../backend/conn.php";

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    die('Error: e-mailadres is ongeldig!');
}

if ($password !== $password_check) {
    die("Error: wachtwoorden komen niet overeen!");
}

if ($status !== 'groep-a' && $status !== 'groep-b') {
    die("Error: kies een geldige afdeling!");
}

$query = "SELECT * FROM users WHERE email = :email";
$statement = $conn->prepare($query);
$statement->execute([
    ':email' => $email
]);

if ($statement->rowCount() > 0) {
    die("Error: account met dit e-mailadres bestaat al.");
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (email, password, afdeling) VALUES (:email, :hash, :afdeling)";
$statement = $conn->prepare($query);
$statement->execute([
    ":email" => $email,
    ":hash" => $hashedPassword,
    ":afdeling" => $status
]);

$_SESSION['user_id'] = $conn->lastInsertId();

header("Location: ../../../../login.php?msg=Account aangemaakt!");
exit();
