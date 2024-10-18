<?php


?>


<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CLASS SCHEDULING</title>
            <!--Link for Bootstrap 5-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            </style>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

            <!--EXTERNAL FILE (LOGIN.CSS)-->
            <link rel="stylesheet" href="css/form.css">
        

        </head>
    <body>
        <!--NAVIGATION BAR-->
        <div class="container-fluid">
                <div class="nav">
                    <div class="nav-brand-item">
                        <img class="logo" src="img/sti.png" width="100%"/>
                    </div>
                </div>
        </div>
        
        <!--BACKGROUND-IMAGE-->
        <img src="img/background.jpg" class="background" style="width:100%" height="100%">
        
        <!--FOR SECOND IMAGE-->
        <!-- UNFINISHED TASK.... -->
        <img src="" alt="">



        <!--LOGIN & REGISTRATION-->
 <div class="d-flex justify-content-center">
    <div class="wrapper">
         

            <!--LOGIN FORM-->
        <div class="form-box login">
            <h2>Login</h2>
            <form action="process.php" method="post">
                <div class="input-box">
                    <input type="email" name="email" id="txtemail" required/>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="txtpassword "required/>
                    <label>Password</label>
                </div>
                <input type="submit" class="btn" name="submit" value="Login">
                <div class="login-register">
                    <p>
                        Don't have an account?
                        <a href="#" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>


            <!--REGISTRATION FORM-->
        <div class="form-box register">
            <h2>Registration</h2>
            <form action="process.php" method="post">
                <div class="input-box">
                    <input type="email" name="email" id="txtemail" required/>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="txtpassword" required/>
                    <label>Password</label>
                </div>
                <div class="conditions">
                    <input type="checkbox" name="checkbox" id="check">
                    <label>I agree to terms & conditions</label>
                </div>
                <input type="submit" class="btn" name="submit" value="Register">
                <div class="login-register">
                    <p>
                        Already have an account?
                        <a href="#" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>


































        <!--<div class="container-fluid">          
                    <div class=background-login>
                            <div class="login-container">
                            <p class="top-text">Admin Login</p>
                            <form action="process.php" method="post">
                                <div class="element-container">
                                    <i class="fa-regular fa-user"></i>
                                    <input type="email" name="email" id="email" required/>
                                </div>
                                <div class="element-container">
                                    <i class="fa-solid fa-lock"></i>
                                    <input type="password" name="password" id="password">
                               </div>
                                <div class="container text-center">
                                    <input type="submit" name="login" value="Login">
                                </div>
                            </form>
                                <input type=submit class="btn-login">Login</button>
                            </div>
                    </div>
        </div>-->


        <script src="script.js"></script>
    </body>
</html>