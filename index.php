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
            <h1>Join thousands of learners from around the world </h1>
        </div>
        <div>
            <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
        </div>
        <form method="post" action="/handle_db/create_user_db.php" >
            <label for="email">email</label>
            <input type="email" placeholder="Email" id="create_email" name="email" required>

            <br>

            <label for="password">password</label>
            <input type="password" placeholder="Password" id="create_pswd" name="password" required>

            <br>

            <button type="submit">Start coding now </button>
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
            <p>Adready a member?
                <a href="/views/login.php" type="submit"> Login </a>
            </p>
        </div>
    </div>
</body>

</html>