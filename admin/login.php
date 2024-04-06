<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <script src="https://kit.fontawesome.com/b8f6f13c30.js" crossorigin="anonymous"></script>
    <title>Login form</title>
</head>

<body id="login-body">
    <div class="container" id="login">
        <div class="form-container">
            <h2>Login</h2>
            <form action="backend/adminlogincheck.php" method="POST" enctype="multipart/form-data">
                <input type="email" name="email" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <a href="">Forgot password?</a>
                <button type="submit" name="submit">Log In</button>
            </form>
            <span>Or login with social account</span>
        </div>
        <div class="social-media">
            <a href=""><button class="btn1">
                    <i class="fa-brands fa-facebook"></i>Facebook
                </button>
            </a>
            <a href=""><button class="btn2">
                    <i class="fa-brands fa-google"></i>Google
                </button></a>
        </div>

        <div class="signin-container">
            <p>
                If you havent't register yet ,<br />
                you can register from here
            </p>
            <button><a href="">Sign in</a></button>
        </div>
    </div>
</body>

</html>