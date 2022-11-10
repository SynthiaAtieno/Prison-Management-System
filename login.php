<?php

include 'include/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="registration-form">
        <!--<img src="images/logo.png" alt="logo">-->
        <h1>Sign Up</h1>
        <form action="login.php" method="POST">
            <p>Username:</p>
            <input type="text" name="username" placeholder="Username">
            
            <p>Password:</p>
            <input type="password" name="password" placeholder="Password">
            <button type="#"> Login</button>

            <p class="signIn">Don't have an account? <a href="register.php" style="text-decoration: none; color: white;">Sign Up</a></p>
        </form>
    </div>
</body>
</html>