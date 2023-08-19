<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Authenticator</title>
</head>

<body>
    <div class="index_container">
        <div class="index_container_box">
            <div>
                <p>devchallenges</p>
            </div>
            <div>
                <h1>Join thousands of learners from <br> around the world </h1>
            </div>
            <div>
                <p>Master web development by making real-life <br> projects. There are multiple paths for you to <br> choose</p>
            </div>
            <form method="post" action="/handle_db/create_user_db.php">
                <label for="email"></label>
                <input type="email" placeholder="Email" id="create_email" name="email" required>

                <br>

                <label for="password"></label>
                <input type="password" placeholder="Password" id="create_pswd" name="password" required>

                <br>

                <button type="submit" id="coding_now">Start coding now </button>
            </form>
            <div class="index_container_box2">
                <div>
                    <p>or continue with these social profile</p>
                </div>
                <div id="index_icons">
                    <div><img src="img/google.png"></div>
                    <div><img src="img/facebook.png"></div>
                    <div><img src="img/x.png"></div>
                    <div><img src="img/github.png"></div>
                </div>

                <div>
                    <p>Adready a member?
                        <a class="lgn" href="/views/login.php" type="submit"> Login </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <footer id="index_footer">
        <p>created by <a>Felipe Messias</a></p>
        <p>devChallenges.io</p>
    </footer>
</body>


</html>