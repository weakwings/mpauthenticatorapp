<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once("connection.php");

    session_start();

    $idUser = intval($_SESSION["user_data"]["id_user"]);

    if (isset($_POST["name"]) && $_POST["name"] !== "") {
        $name = $_POST["name"];
        $mysqli->query("UPDATE usuarios SET name = '$name' WHERE id_user=$idUser");
    }
    if (isset($_POST["bio"]) && $_POST["bio"] !== "") {
        $bio = $_POST["bio"];
        $mysqli->query("UPDATE usuarios SET bio = '$bio' WHERE id_user=$idUser");
    }
    if (isset($_POST["phone"]) && $_POST["phone"] !== "") {
        $phone = $_POST["phone"];
        $mysqli->query("UPDATE usuarios SET phone = '$phone' WHERE id_user=$idUser");
    }
    if (isset($_POST["email"]) && $_POST["email"] !== "") {
        $email = $_POST["email"];
        $mysqli->query("UPDATE usuarios SET email = '$email' WHERE id_user=$idUser");
    }
    if (isset($_POST["password"]) && $_POST["password"] !== "") {
        $password = $_POST["password"];
        $mysqli->query("UPDATE usuarios SET psswrd = '$password' WHERE id_user=$idUser");
    }

    $stmt = $mysqli->query("SELECT * FROM usuarios WHERE id_user=$idUser");

    if ($stmt->num_rows === 1) {
        $_SESSION["user_data"] = $stmt->fetch_assoc();
    }

    header("Location: ../views/profile.php");
} else {
    echo "Não esta acessando esta pagina";
}
