<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"] !== "" && $_POST["password"] !== "") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {

        require_once("connection.php");

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $result = $mysqli->query("INSERT INTO usuarios (email, psswrd) VALUES ('$email', '$hash');");

        if ($result) {
            $stmt = $mysqli->query("SELECT * FROM usuarios WHERE email = '$email'");
            $data = $stmt->fetch_assoc();
            session_start();
            $_SESSION["user_data"] = $data;
            header("Location:../views/login.php");
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Não esta acessando essa Pagina";
}
