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
    <title>Profile</title>
</head>

<body>
    <div>
        <p>devchallenger</p>
        <div>
            <p>foto do avatar</p>
            <di>
                <p>My profile</p>
                <p>Group Chat</p>
                <a href="../logout.php">Logout</a>
            </di>
        </div>
    </div>

    <div>
        <h1>Personal info</h1>
        <a>Basic info, like your name and photo</a>
    </div>

    <form>
        <div>
            <div>
                <div>
                    <h1>Profile</h1>
                    <p>Some info may be visible to other people</p>
                </div>
                <div>
                    <button type="submit">Edit</button>
                </div>
            </div>

            <div>
                <p>PHOTO</p>
                <p>foto</p>
            </div>
            <br>
            <div>
                <p>NAME</p>
                <p>nome</p>
            </div>
            <br>
            <div>
                <p>BIO</p>
                <p>bio</p>
            </div>
            <br>
            <div>
                <p>PHONE</p>
                <p>telefone</p>
            </div>
            <br>
            <div>
                <p>EMAIL</p>
                <p>email</p>
            </div>
            <br>
            <div>
                <p>PASSWORD</p>
                <p>senha</p>
            </div>
            <br>
        </div>

    </form>

</body>

</html>