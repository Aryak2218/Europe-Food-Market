<?php
session_start();

function isLoginValid($username, $password) {
    
    $valid_username = 'aryak1';
    $valid_password = '12345';

    return $username === $valid_username && $password === $valid_password;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isLoginValid($username, $password)) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
    } else {
        header('Location: login.php?error=1');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Europefoodmarkethomepage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <style>
        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #fefefe;
            border: 1px solid #888;
            width: 300px;
            padding: 20px;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <header>
        <center>
            <img src="europe.png" alt="" width="200" />
            <h1>Welcome To Europe Food Market</h1>
            <a href="index.php" >Home</a>
            <a href="Login.php" >Login</a>
            <a href="Register.php">Register</a>
        </center>
    </header>
    <main>
        <div class="form-login">
            <center>
                <h2>Login Your Account </h2>
                <form method="POST" action="">
                    <input type="text" name="username" placeholder="Username" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit">Login</button>
                </form>
            </center>
            <center>
                <p>Don't Have Account??</p>
                <a href="register.php">Register Here</a>
            </center>
        </div>
        <div id="popup" class="popup">
            <h2>LOGIN</h2>
            <p>Login successful</p>
            <button onclick="hidePopup()">Close</button>
        </div>
    </main>

    <script>
        function showPopup() {
            document.getElementById("popup").style.display = "block";
        }

        function hidePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>
</html>
