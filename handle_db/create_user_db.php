<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["password"] !== "") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        require_once("connection.php");

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $mysqli->prepare("INSERT INTO usuarios (email, psswrd) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hash);
        $stmt->execute();

        $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $data = $stmt->get_result()->fetch_assoc();
        session_start();
        $_SESSION["user_data"] = $data;
        header("Location:../views/login.php");
    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            
            echo "Email is already in use";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    echo "You don't have access to this page";
}

