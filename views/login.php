<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Authenticator</title>
</head>

<body>
    <div>
        <div>
            <h1>devchallenges</h1>
        </div>
        <div>
            <h1>Login</h1>
        </div>
        <form method="post" action="../handle_db/login_db.php">
            <label for="email">email</label>
            <input type="email" placeholder="Email" id="log_email" name="email" require>

            <br>

            <label for="password">password</label>
            <input type="password" placeholder="Password" id="log_pswd" name="password" require>

            <br>

            <button type="submit">Login </button>
        </form>
        <div>
            <p>or continue with these social profile</p>
        </div>
        <div>
            <p>google</p>
            <p>facebook</p>
            <p>twitter</p>
            <p>github</p>
        </div>
        <div>
            <p>Don`t have an account yet?
                <href type="submit"> Register </href>
            </p>
        </div>
    </div>
</body>

</html>