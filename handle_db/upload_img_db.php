<?php
if (isset($_FILES["image"])) {
    $image = $_FILES["image"];
    $type = $_FILES["image"]["type"];

    $typeString = substr($type, 0, 5);

    session_start();
    if ($typeString !== "image") {
        $_SESSION["error_type"] = "Só pode subir imagens";
    }

    if ($image["size"] > 100000) {
        $_SESSION["error_size"] = "Este arquivo é muito grande";
    }

    if ($typeString !== "image" && $image["size"] < 100000) {
        $dataImg = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

        require_once("connection.php");

        $mysqli->query("INSERT INTO usuarios(avatar) VALUES ('$dataImg')");

        echo "Imagem Salva";
    }
    header("Location: ../views/profile.php");
};
