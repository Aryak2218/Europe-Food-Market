<!DOCTYPE html>
<html>
<head>
    <title>europefoodmarketregisterpage</title>
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
        <a href="index.php" >Home</a>
        <a href="Login.php" >Login</a>
        <a href="Register.php">Register</a>
    </header>
    <main>
        <div class="form-login">
            <center>
                <h2>Register Here </h2>
                <input type="email" id="email" name="email" placeholder="Email" />
                <br>
                <input type="number" id="phoneNumberInput" name="phonenumber" placeholder="PhoneNumber" />
                </br>
                <br>
                <input type="text" id="usernameInput" name="username" placeholder="Username" /> 
                </br>
                <input type="password" id="passwordInput" name="password" placeholder="Password" />
            </center>
            <center>
                <!-- Panggil fungsi register() saat tombol "Register" diklik -->
                <button type="button" onclick="register()">Register</button>
            </center>
        </div>
    </main>

    <script>
        function register() {
            // Ambil nilai dari input
            var email = document.getElementById('email').value;
            var phoneNumber = document.getElementById('phoneNumberInput').value;
            var username = document.getElementById('usernameInput').value;
            var password = document.getElementById('passwordInput').value;
         

            alert("register succesfull" + email)

        }
    </script>
</body>
</html>
