<?php
session_start();
if (!isset($_SESSION["user_data"])) {
    echo "Voce não esta logado";
    die();
}
$data = $_SESSION["user_data"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <div>
        <a href="/views/profile.php">Back</a>
    </div>
    <form action="../handle_db/update_db.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php isset($data['name']) ? print($data['name']) : print('')?>">
        <br>
        <label for="bio">Bio</label>
        <input type="text" name="bio" id="bio" value="<?php isset($data['bio']) ? print($data['bio']) : print('')?>">
        <br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="<?php isset($data['phone']) ? print($data['phone']) : print('')?>">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php isset($data['email']) ? print($data['email']) : print('')?>">
        <br>
        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>