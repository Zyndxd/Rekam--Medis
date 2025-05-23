<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Style -->
    <link rel="stylesheet" href="../src/assets/css/login.css" />
</head>
<body>
        <div class="form-box" id="register-form">
            <form action="Reg.php" method="POST">
                <h2>REGISTER</h2>
                <input type="text" name="nama" placeholder="Nama" require>
                <input type="text" name="username" placeholder="Username" require>
                <input type="password" name="password" placeholder="Password" require>
                <button type="submit" name="register">REGISTER</button>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
    <!-- Javascript -->
    <script src="script.js"></script>
</body>
</html>