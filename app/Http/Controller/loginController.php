<?php 
session_start();



$db = new PDO('mysql:host=localhost;dbname=takenlijst', 'root', '');

$db ->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$query = $db ->prepare($sql);
$query -> execute([
    'username' => $username,
    'password' => $password
]);

$user = $query->fetch(PDO::FETCH_ASSOC);

if($user) 
{
    $_SESSION['user'] = $user['username'];
    header('location: ../../../task.php');
} 
else 
{
    header('location: ../../../login.php');
    exit();
}

?>