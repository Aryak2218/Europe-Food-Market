<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }

    mysqli_close($koneksi);
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
            <a href="index.php">Home</a>
            <a href="Login.php">Login</a>
            <a href="Register.php">Register</a>
        </center>
    </header>
    <main>
        <div class="form-login">
            <center>
                <h2>Login Your Account</h2>
                <form method="POST" action="">
                    <input type="text" name="username" placeholder="Username" required />
                    <input type="password" name="password" placeholder="Password" required />
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
</body>
</html>
