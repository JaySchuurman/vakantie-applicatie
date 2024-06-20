<?php
session_start();
include 'conn.php';
if(empty($_POST['username']) || empty($_POST["password"])){
    header("Location: register.php");
    exit();
}
 
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST['email'];
 
$stmt = $connection->prepare("INSERT INTO users (name, password, email) VALUES(:user, :pass, :mail)");
$stmt->bindParam(":user", $username);
$stmt->bindParam(":pass", $password);
$stmt->bindParam(":mail", $email);
$stmt->execute();
 
 
 
header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>