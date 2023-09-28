<?php
require_once "../config/dbconn.php";

if (isset($_POST["register"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confpassword = $_POST["confpassword"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email");
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, confpassword) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $password, $confpassword]);
        header("Location: ../ViewUsers.php?noset");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
