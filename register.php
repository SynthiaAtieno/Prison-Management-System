<?php
//phpinfo();
include 'include/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prison</title>
</head>
<body>
    <div id="box">
        <div class="registration-form">
            <!--<img src="images/logo.png" alt="logo">-->
            <h1>Sign Up</h1>
            <form action="register.php" method="POST">
                <p>Username:</p>
                <input type="text" name="username" placeholder="Username">
                <p>Email:</p>
                <input type="email" name="email" placeholder="Email">
                <p>Phone Number:</p>
                <input type="number" name="phone" placeholder="Phone Number">
                <p>Password:</p>
                <input type="password" name="password" placeholder="Password">
                <button type="#"> Register</button>

                <p class="signIn">Already have an account <a href="login.php" style="text-decoration: none; color: white;">Sign In</a></p>
            </form>
        </div>
    </div>
   
</body>
</html>