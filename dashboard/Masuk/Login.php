<?php 
session_start();

if(isset($_SESSION["Login"])){
    header("Location: ../template/index.php");
}
?>

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
    <div class="container">
        <div class="form-box active" id="login-form">
            <form action="Log.php" method="POST">
                <h2>LOGIN</h2>
                <input type="text" name="username" placeholder="username" require>
                <input type="password" name="password" placeholder="Password" require>
                <button type="submit" name="login">LOGIN</button>
            </form>
        </div>
    </div>
    <!-- Javascript -->
    <script src="script.js"></script>
</body>
</html>