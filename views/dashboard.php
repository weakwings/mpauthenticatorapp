<?php
session_start();
if (!isset($_SESSION["user_data"])) {
    echo "Voce não esta logado";
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome!</h1>
    <?php
    var_dump($_SESSION["user_data"]);
    ?>

    <a href="../logout.php">Logout</a>
</body>

</html>