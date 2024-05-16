<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content = "IE=edge">
        <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
        <title>Login-Register-master</title>
        <link rel="stylesheet" href="style4.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
    </head>

    <body>
        <div class="container">
            <div class="box">
                <!---Login---->
                <div class="box-login" id="login">
                    <div class="top-header">
                        <h3>Welcome back, Master</h3>
                        <small>We are happy to have you back.</small>
                    </div>
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" class="input-box" id="logEmail" required>
                            <label for="logEmail">Email address</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input-box" id="logPassword" required>
                            <label for="logPassword">Password</label>
                        </div>
                        <div class="remember">
                            <input type="checkbox" id="formCheck" class="check">
                            <label for="formCheck"> Remember Me</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="input-submit" value="Sign In">
                        </div>
                        <div class="forgot">
                            <a href="#">Forgot Password</a>
                        </div>
                    </div>

                </div>


                <!---Register--->

                <div class="box-register" id="register">
                    <div class="top-header">
                        <h3>Welcome, Master</h3>
                        <small>We are happy to have you with us.</small>
                    </div>
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" class="input-box" id="regUser" required>
                            <label for="regUser">UserName</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input-box" id="regEmail" required>
                            <label for="regEmail">Email address</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input-box" id="regPassword" required>
                            <label for="regPassword">Password</label>     
                        </div>
                        <div class="input-field">
                            <input type="password" class="input-box" id="regPassword" required>
                            <label for="regPassword">Confirm Password</label>     
                        </div>
                        <div class="remember">
                            <input type="checkbox" id="formCheck-2" class="check">
                            <label for="formCheck-2"> Remember Me</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="input-submit" value="Sign In">
                        </div>
                    </div>

                </div>

                <!--------------Switch----------------->
                <div class="switch">
                    <a href="#" class="login" onclick="login()">Login</a>
                    <a href="#" class="register" onclick="register()">Register</a>
                    <div class="btn-active" id="btn"></div>
                </div>
            </div>
        </div>

        <script>
            var x = document.getElementById('login');
            var y = document.getElementById('register');
            var z = document.getElementById('btn');

            function login(){
                x.style.left = "27px";
                y.style.left = "-350px";
                z.style.left = "0px";
            }

            function register(){
                x.style.left = "-350px";
                y.style.left = "25px";
                z.style.left = "150px";
            }


        </script>
    </body>
