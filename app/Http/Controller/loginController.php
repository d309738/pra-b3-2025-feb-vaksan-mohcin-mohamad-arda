<?php 
session_start();


require_once "../../../backend/conn.php";


$db = new PDO('mysql:host=localhost;dbname=takenlijst', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = :email";
$query = $db->prepare($sql);
$query->execute(['email' => $email]);

$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) 
{
    $_SESSION['user'] = $user['email'];
    header('Location: ../../../../index.php');
    exit();
} else 
{
    header('Location: ../../../../login.php');
    exit();
}
?>
