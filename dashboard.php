<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
 
echo "Hello and welcome to the dashboard!";
?>
