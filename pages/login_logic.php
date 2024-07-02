<?php
include "conn.php";

if (empty($_POST['username']) || empty($_POST['password'])) {
    header("Location: login.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

require_once "conn.php";

$stmt = $connection->prepare("SELECT * FROM users WHERE name = :name AND password = :password");
$stmt->bindParam(':name', $username, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);

$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $user['id'];
    header("Location: user-dashboard.php");
} else {
    header("Location: login.php?error=invalid_credentials");
    exit();
}
?>
