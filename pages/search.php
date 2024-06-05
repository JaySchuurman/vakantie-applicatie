<?php

$sql = "SELECT users.email, users_data.voornaam, users_data.achternaam
FROM users
INNER JOIN users_data ON users.id=users_data.users_id;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
<link rel="stylesheet" href="css/test.css">
</head>
<body>
    <label>Jay</label>
    <input type='checkbox' id='isJay'>

    <button onclick='filter '
</body>
</html>