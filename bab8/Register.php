<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Hash the password for security
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Use prepared statements to prevent SQL injection
    $stmt = $koneksi->prepare("INSERT INTO users (email, phone_number, username, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $phone_number, $username, $password_hash);

    if ($stmt->execute()) {
        echo "Registration successful!!!";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Europe Food Market - Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
</head>
<body>
    <header>
        <center>
            <img src="europe.png" alt="" width="200"/>
            <h1>Welcome To Europe Food Market</h1>
        </center>
        <center>
            <a href="index.php">Home</a>
            <a href="Login.php">Login</a>
            <a href="Register.php">Register</a>
        </center>
    </header>
    <main>
        <div class="form-login">
            <center>
                <h2>Register Here</h2>
                <form method="POST" action="">
                    <input type="email" id="email" name="email" placeholder="Email" required />
                    <br>
                    <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" required />
                    <br>
                    <input type="text" id="username" name="username" placeholder="Username" required />
                    <br>
                    <input type="password" id="password" name="password" placeholder="Password" required />
                    <br>
                    <button type="submit">Register</button>
                </form>
            </center>
        </div>
    </main>
</body>
</html>
