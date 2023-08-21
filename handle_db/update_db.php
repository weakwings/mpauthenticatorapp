<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once("connection.php");

    session_start();

    $idUser = intval($_SESSION["user_data"]["id_user"]);
    if (isset($_FILES["image"])) {
        $image = $_FILES["image"];
        $type = $_FILES["image"]["type"];
        $typeString = substr($type, 0, 5);
        
        
        if ($typeString === "image" && $image["size"] < 5000000) {
            
            $dataImg = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            $stmt = $mysqli->prepare("UPDATE usuarios SET avatar = ? WHERE id_user = ?");
            $stmt->bind_param("si", $dataImg, $_SESSION["user_data"]["id_user"]);
            $stmt->execute();
        }
    }

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
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $mysqli->query("UPDATE usuarios SET psswrd = '$hash' WHERE id_user=$idUser");
    }    

    $stmt = $mysqli->query("SELECT * FROM usuarios WHERE id_user=$idUser");

    if ($stmt->num_rows === 1) {
        $_SESSION["user_data"] = $stmt->fetch_assoc();
    }

    header("Location: ../views/edit.php");
} else {
    echo "Not accessing this page";
}
