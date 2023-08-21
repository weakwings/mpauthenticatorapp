<?php
if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST["email"] !== "" && $_POST["password"] !== "") {
    require_once("connection.php");
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        $statement = $mysqli->query("SELECT * FROM usuarios WHERE email='$email';");

        if ($statement->num_rows === 1) {
            $data = $statement->fetch_assoc();

            if (password_verify($password, $data["psswrd"])) {
                session_start();
                $_SESSION["user_data"] = $data;

                header("Location:../views/profile.php");
            } else {
                echo "Credentials do not match";
            }
        }
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "The conditions for collaborating session start data are not met.";
}
