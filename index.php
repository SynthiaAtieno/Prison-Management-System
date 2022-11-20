
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prison Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <section>
        <div class="container mt-5">
            <center>
                <div class="card d-flex justify-content-center" style="width: 30rem;">
                <div class="card-header" style="background-color: white;">
                <center>
                    <img src="images/logo.png" style="width: 30%; height:20%" alt="Prison logo" srcset="">
                </center>
             </div>
                <div class="card-body" >
                <form id="myForm" action="login.php" method="POST">
                <fieldset>
                    <label>User Name: </label><input onKeyUp="userSubmit1()" type="text" name="username" class="effect" id="username"/>
                    </fieldset>  <br>
                    <fieldset>
                    <label>Password: </label><input onKeyUp="userSubmit1()" type="password" name="passsword" class="effect" id="password"/>
                </fieldset>  
       

                <center><BR/>
                <button id="submit" name="login">Login</button><BR>
                 <span id="error" style="color:orangered"> </span>
                 </center>
                </div>
                <div style="align-items:right;">
                    <p >Do not have an account? <a href="register_form.php"><span">Register</span></a></p>
                    </div>
                </form>
                </center>
            </div>
        </div>
    </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>